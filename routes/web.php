<?php

use Illuminate\Support\Facades\Route;

//vue utilisateur
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/propos', function () {
    return view('propos');
})->name('propos');

Route::get('/creer_compte', function () {
    return view('creer_compte');
})->name('compte');

Route::get('/connexion', function () {
    return view('se_connecter');
})->name('connecter');

Route::get('/passe_oublier', function () {
    return view('passe_oublier');
})->name('oublier');

Route::get('/FAQ', function () {
    return view('faq');
})->name('FAQ');




//vue administrateur (les vues de la sidebar)
Route::get('/dashboard/home', function () {
    return view('dashboard.home');
})->name('dashboard.home');

Route::get('/dashboard/vente', function () {
    return view('dashboard.vente');
})->name('dashboard.vente');


Route::get('/dashboard/client', function () {
    return view('dashboard.client');
})->name('dashboard.client');

Route::get('/dashboard/produit', function () {
    return view('dashboard.produit');
})->name('dashboard.produit');

Route::get('/dashboard/fournisseur', function () {
    return view('dashboard.fournisseur');
})->name('dashboard.fournisseur');


Route::get('/dashboard/commande', function () {
    return view('dashboard.commande');
})->name('dashboard.commande');

Route::get('/dashboard/stock', function () {
    return view('dashboard.stock');
})->name('dashboard.stock');

Route::get('/dashboard/all_commande', function () {
    return view('dashboard.all_commande');
})->name('dashboard.all_commande');


Route::get('/dashboard/utilisateur', function () {
    return view('dashboard.utilisateur');
})->name('dashboard.utilisateur');

Route::get('/dashboard/parametre', function () {
    return view('dashboard.parametre');
})->name('dashboard.parametre');


Route::get('/dashboard/information', function () {
    return view('dashboard.information');
})->name('dashboard.information');

Route::get('/dashboard/historique_achat', function () {
    return view('dashboard.historique achat');
})->name('dashboard.historique_achat');

Route::get('/dashboard/commande entrant', function () {
    return view('dashboard.commande entrant');
})->name('dashboard.commande_entrant');

Route::get('/dashboard/commande sortant', function () {
    return view('dashboard.commande sortant');
})->name('dashboard.commande_sortant');

Route::get('/dashboard/stock entrant', function () {
    return view('dashboard.stock entrant');
})->name('dashboard.stock_entrant');

Route::get('/dashboard/Produit sortant', function () {
    return view('dashboard.produit sortant');
})->name('dashboard.produit_sortant');

Route::get('/dashboard/liste produit sortant', function () {
    return view('dashboard.liste produit sortant');
})->name('dashboard.liste_produit_sortant');


Route::get('/dashboard/liste produit entrant', function () {
    return view('dashboard.liste produit entrant');
})->name('dashboard.liste_produit_entrant');

Route::get('/dashboard/Produit', function () {
    return view('dashboard.produit');
})->name('dashboard.all_produit');

//setting
Route::get('/dashboard/setting/logout', function () {
    return view('dashboard.setting.logout');
})->name('dashboard.setting.logout');

//manager
Route::get('/dashboard/manager/gerer', function () {
    return view('dashboard.manager.gerer');
})->name('dashboard.manager.gerer');

Route::get('/dashboard/manager/activite', function () {
    return view('dashboard.manager.activite');
})->name('dashboard.manager.activite');

