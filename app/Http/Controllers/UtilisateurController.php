<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    function profil($id) {
    return response()->stream(function () use ($id) {
        // headers SSE
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        while (true) {
            // On va chercher les infos de l’utilisateur
            $user = DB::table('utilisateurs')->where('id', $id)->first();

            if ($user) {
                echo "data: " . json_encode($user) . "\n\n";
                ob_flush();
                flush();
            }

            // petite pause avant la prochaine vérification
            sleep(5);
        }
    }, 200);
}
}
