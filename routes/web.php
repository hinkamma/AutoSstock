<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

//vue utilisateur
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/propos', function () {
    return view('propos');
})->name('propos');

Route::get('/creer_compte', [FormController::class,'view_Sign'])->name('compte');
Route::post('/creer_compte', [FormController::class,'traitment_Sign'])->name('traitment_Sign');

Route::get('/connexion',[FormController::class,'view_Login'])->name('connecter');
Route::post('/connexion',[FormController::class,'traitment_Login'])->name('traitment_Login');

Route::get('/passe_oublier',[FormController::class,'view_Entry_Email'])->name('view_Entry_Email');
Route::post('/passe_oublier',[FormController::class,'traitment_Entry_Email'])->name('traitment_Entry_Email');

Route::get('/validation',[FormController::class,'view_Validate_Tokens'])->name('view_Validate_Tokens');
Route::post('/validation',[FormController::class,'traitment_Validate_Tokens'])->name('traitment_Validate_Tokens');

Route::get('/renitialiser_compte',[FormController::class,'view_new_Identifiants'])->name('view_new_Identifiants');
Route::post('/renitialiser_compte',[FormController::class,'traitment_new_Identifiants'])->name('traitment_new_Identifiants');

Route::get('/FAQ', function () {
    return view('faq');
})->name('FAQ');




//vue administrateur (les vues de la sidebar)
Route::get('/dashboard/home', function () {
    return view("dashboard.home");
})->middleware("auth")->name('dashboard.home');

Route::get('/dashboard/vente', function () {
    return view('dashboard.vente');
})->middleware("auth")->name('dashboard.vente');


Route::get('/dashboard/client', function () {
    return view('dashboard.client');
})->middleware("auth")->name('dashboard.client');

Route::get('/dashboard/produit', function () {
    return view('dashboard.produit');
})->middleware("auth")->name('dashboard.produit');

Route::get('/dashboard/fournisseur', function () {
    return view('dashboard.fournisseur');
})->middleware("auth")->name('dashboard.fournisseur');


Route::get('/dashboard/commande', function () {
    return view('dashboard.commande');
})->middleware("auth")->name('dashboard.commande');

Route::get('/dashboard/stock', function () {
    return view('dashboard.stock');
})->middleware("auth")->name('dashboard.stock');

Route::get('/dashboard/all_commande', function () {
    return view('dashboard.all_commande');
})->middleware("auth")->name('dashboard.all_commande');


Route::get('/dashboard/utilisateur', function () {
    return view('dashboard.utilisateur');
})->middleware("auth")->name('dashboard.utilisateur');

Route::get('/dashboard/parametre', function () {
    return view('dashboard.parametre');
})->middleware("auth")->name('dashboard.parametre');


Route::get('/dashboard/information', function () {
    return view('dashboard.information');
})->middleware("auth")->name('dashboard.information');

Route::get('/dashboard/historique_achat', function () {
    return view('dashboard.historique achat');
})->middleware("auth")->name('dashboard.historique_achat');

Route::get('/dashboard/commande entrant', function () {
    return view('dashboard.commande entrant');
})->middleware("auth")->name('dashboard.commande_entrant');

Route::get('/dashboard/commande sortant', function () {
    return view('dashboard.commande sortant');
})->name('dashboard.commande_sortant');

Route::get('/dashboard/stock entrant', function () {
    return view('dashboard.stock entrant');
})->middleware("auth")->name('dashboard.stock_entrant');

Route::get('/dashboard/Produit sortant', function () {
    return view('dashboard.produit sortant');
})->middleware("auth")->name('dashboard.produit_sortant');

Route::get('/dashboard/liste produit sortant', function () {
    return view('dashboard.liste produit sortant');
})->middleware("auth")->name('dashboard.liste_produit_sortant');


Route::get('/dashboard/liste produit entrant', function () {
    return view('dashboard.liste produit entrant');
})->middleware("auth")->name('dashboard.liste_produit_entrant');

Route::get('/dashboard/Produit', function () {
    return view('dashboard.produit');
})->middleware("auth")->name('dashboard.all_produit');

//setting
Route::get('/dashboard/setting/logout',[FormController::class,'view_Disconet'])->middleware("auth")->name('view_Disconet');
Route::post('/dashboard/setting/logout',[FormController::class,'traitment_Disconet'])->middleware("auth")->name('traitment_Disconet');

//manager
Route::get('/dashboard/manager/gerer', function () {
    return view('dashboard.manager.gerer');
})->middleware("auth")->name('dashboard.manager.gerer');

Route::get('/dashboard/manager/activite', function () {
    return view('dashboard.manager.activite');
})->middleware("auth")->name('dashboard.manager.activite');

