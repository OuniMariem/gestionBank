<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('ajoutClient', function(){
    return view('ajouterClient');
});

Route::resource('clients','App\Http\Controllers\clientController');

Route::resource('comptes','App\Http\Controllers\compteController');

Route::get('operation', function(){
    return view('ajouterOperation');
});

Route::resource('operations','App\Http\Controllers\operationController');
Route::get('index', function(){
    return view('index');
});

Route::get('connexion',function()
{
    return view('connecterClient');
});

Route::post('connecter','App\Http\Controllers\clientController@identifier');

Route::get('compteA',function()
{
    return view('compteAdmin');
});

Route::get('solde', function(){
    return view('solde');
});
Route::get('solde','App\Http\Controllers\compteController@listCompte');

Route::get('historiqueCompte', function(){
    return view('historiqueCompte');
});
Route::get('historiqueCompte','App\Http\Controllers\operationController@affiche');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('afficheClient', function(){
    return view('afficherClient');
});
Route::get('afficheClient','App\Http\Controllers\clientController@affiche');


Route::get('compte/{id}', 'App\Http\Controllers\clientController@findClient')->name('client.findClient');


Route::get('login', function(){
    return view('login');
});

// Route::get('listeCpt', function(){
//     return view('listeCompte');
// });
Route::get('listeCpt','App\Http\Controllers\compteController@listeCompte');

Route::get('liste', function(){
    return view('listeCompte');
});


