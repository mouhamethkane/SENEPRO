<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MetierController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ouvrierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OuvierRealisationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------s---------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('ouvriers.accueil');
// });

Route::get("/create",[ouvrierController::class,"index"])->name('ouvrier.create');
Route::post("/ajouter",[ouvrierController::class,"ajouter"])->name('ouvrier.ajouter');
Route::get("/listouvrier",[ouvrierController::class,"listouvrier"])->name('crud.listouvrier');
Route::get("/update/{id}",[ouvrierController::class,"update"])->name('crud.update');

Route::post("/edit",[ouvrierController::class,"edit"])->name('crud.edit');
Route::get("/crud.delete/{id}",[ouvrierController::class,"delete"])->name('crud.delete');
Route::get('/mertiermembre/{id}', [ouvrierController::class, 'lismembre'])->name('mertiermembre');
// Route::get('/show/{id}', [ouvrierController::class, 'lisouvrier'])->name('show');
Route::get('/ouvriers/{id}', [ouvrierController::class, "show"]);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/article', function () {
    return view('article');
})->name('index');



Route::get('/accueil', function () {
    return view('ouvriers.accueil');
})->name('accueil');

Route::get('/inscription', function(){
    return view('inscription');
});

Route::post('/inscription', function(){

    $utilisateur = new App\Utilisateur;
    $utilisateur->email = request('email');
    $utilisateur->mot_de_passe = request('password');

    $utilisateur->save();
    return 'Nous avons recus votre email qui est '. request('email');

});






Route::get('/contact', [MailController::class, 'contact'])->name('contactpage');
Route::post('/contact', [MailController::class, 'contactSend'])->name('contactSend');


Route::get('/article', [ArticleController::class, 'index'])->name('index');
Route::get('/consulte', [ArticleController::class, 'consulte'])->name('consulte');
Route::post('/article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ArticleController::class, 'update'])->name('update');



Route::get('/delete/{id}', [ArticleController::class, 'delete'])->name('delete');

Route::get('/', [ArticleController::class, 'accueil'])->name('accueil');
Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::post('/comments', [CommentController::class, 'comments']);
Route::get('profilcarrolleur', [CommentController::class, 'profilcarrolleur']);

// *******************************************************************
Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);

Route::post('/bar', [EtudiantController::class, 'bar']);

// ****************************************************************************

Route::controller(MetierController::class)->group(function () {

    Route::get('/metiers.index', 'index')->name('metiers.index');
    Route::get('/metiers.create', 'create')->name('metiers.create');
    Route::get('/metiers.edit/{id}/edit', 'edit')->name('metiers.edit');
    Route::post('/metiers.update/{id}', 'update')->name('metiers.update');
    Route::post('/metiers.store', 'store')->name('metiers.store');
    Route::delete('/metiers.destroy/{id}', 'destroy')->name('metiers.destroy');
    });


Route::get('/coiffeur/{id}', [MetierController::class, 'coiffeur'])->name('coiffeur');
Route::get('/coifprofil/{id}', [MetierController::class, 'coifprofil'])->name('coifprofil');

Route::get('/metier/{id}', [MetierController::class, 'show'])->name('show');


// *********************Réalisation des Ouvriers ********************************************
Route::get('/realisation/{id}', [OuvierRealisationController::class, 'listrealisation'])->name('realisation.listrealisation');
Route::get('/create/{id}', [OuvierRealisationController::class, 'create'])->name('realisation.create');
