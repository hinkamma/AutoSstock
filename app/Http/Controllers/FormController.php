<?php

namespace App\Http\Controllers;

use App\Mail\TestMailer;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    // formulaire d'inscription
    function view_Sign(){
        return view('creer_compte');
    }
    function traitment_Sign(Request $request){
        $request->validate([
            'nom'=>['required','string'],   
            'prenom'=>['required','string'],
            'company'=>['required','string'],
            'email'=>['required','string','email','unique:utilisateurs','required'],
            'password'=>['required','string','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?]).+$/']
        ]);

        $data=Utilisateur::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'company'=>$request->company,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        Auth::login($data);
        $request->session()->regenerate();
        return redirect()->intended('/dashboard/home');
    }



    function view_Login(){
        return view("se_connecter");
    }
    
    function traitment_Login(Request $request){
        $tabRequest = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required']
        ]);
        
        $user = Utilisateur::where('email',$request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/home');
            dd(Auth::check());
        }else{
            return redirect()->back()->withErrors(["stop" => "identifiants incorrects"]);
        }
    }

    // cette fonction permet de deconneter un utilisateur
    function view_Disconet(){
        return view('dashboard.setting.logout');
    }
    function traitment_Disconet(Request $request ){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('connecter');
    }

    function view_Entry_Email() {
        return view('passe_oublier');
    }
    function traitment_Entry_Email(Request $request) {
        $request->validate([
            'email'=>["required","string","email"]
        ]);
        $userSearch=Utilisateur::where('email',$request->email)->first();
        if($userSearch){
            $random=random_int(10000,99999);   //ici on genere un token solide a 5 chiffres
            $user=Utilisateur::where('email',$request->email)->update([
                "tokens"=>$random,
                "token_created_at"=>now()
            ]);  //on le met a jour en base de donné
            
            // ON DOIT MAINTENANT LUI COMMUNIQUER LE TOKEN PAR SON EMAIL
            $request->session()->put('session_active_email',$userSearch->email); //on retient son email en session pour le faire apparaitre dans la route ou on sera redirigé
            Mail::to(session()->get('session_active_email'))->send(new TestMailer($userSearch,$random));
            return redirect()->route('view_Validate_Tokens');

        }else{
            return redirect()->back()->withErrors(['stop'=>'identifiant(s) introuvé(s)']);
        }
    }


    function view_Validate_Tokens(){
        return view('validation');
    }
    function traitment_Validate_Tokens(Request $request){
        $request->validate([
            'tokens'=>['required',"string"]
        ]);
        $user=Utilisateur::where('email',$request->session()->get('session_active_email'))->first();
        if($user && $user->tokens==$request->tokens){
            return redirect()->route('view_new_Identifiants');
        }else{
            return redirect()->back()->withErrors(["stop"=>"le token  n'est pas valide"]);
        }
    }


    function view_new_Identifiants(){
        
        return view('new_identifiants');
    }
    function traitment_new_Identifiants(Request $request){
        
        $request->validate([
            'email'=>["email",'required','string'],
            'password'=>['string','required']
        ]);
        $user=Utilisateur::where('email',$request->session()->get('session_active_email'))->first();
        if($user){
            Utilisateur::where('email',$request->session()->get('session_active_email'))->update(['password'=>bcrypt($request->password)]);
            Auth::login($user);
            return redirect()->intended('dashboard/home');
        }else{
            dd('error');
        }
    } 

}
//             Auth::login($user);
//             return redirect()->intended('dashboard/home');
//         }else{
//             dd('error');
//         }
//     } 

// }


