<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MetierController;
use App\Http\Controllers\ouvrierController;
use App\Http\Controllers\ProfileController;

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
/*Route::get('/layouts.Crud.index', function () {
    return view('layouts.Crud.index');
});

Route::get('/layouts.Crud.ajouter', function () {
    return view('layouts.Crud.ajouter');
});*/

Route::get("/create",[ouvrierController::class,"index"])->name('ouvrier.create');
Route::post("/ajouter",[ouvrierController::class,"ajouter"])->name('ouvrier.ajouter');
Route::get("/listouvrier",[ouvrierController::class,"listouvrier"])->name('crud.listouvrier');
Route::get("/update/{id}",[ouvrierController::class,"update"])->name('crud.update');

Route::post("/edit",[ouvrierController::class,"edit"])->name('crud.edit');
Route::get("/crud.delete/{id}",[ouvrierController::class,"delete"])->name('crud.delete');

Route::get('/', function () {
    return view('ouvriers.accueil');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/accueil', function () {
    return view('ouvriers.accueil');
})->name('accueil');

Route::get('/macon', function () {
    return view('ouvriers.macon');
})->name('macon');
Route::get('/profil', function () {
    return view('ouvriers.profil');
})->name('profil');

Route::get('/carreleur', function () {
    return view('ouvriers.carreleur');
})->name('carreleur');

Route::get('/coiffeurprofil', function () {
    return view('ouvriers.coiffeurprofil');
})->name('coiffeurprofil');

Route::get('/decorprofil', function () {
    return view('ouvriers.decorprofil');
})->name('decorprofil');

Route::get('/profilcarrolleur', function () {
    return view('ouvriers.profilcarrolleur');
})->name('profilcarrolleur');

Route::get('/chauffeur', function () {
    return view('ouvriers.chauffeur');
})->name('chauffeur');

Route::get('/coiffeur', function () {
    return view('ouvriers.coiffeur');
})->name('coiffeur');

Route::get('/decorateur', function () {
    return view('ouvriers.decorateur');
})->name('decorateur');

Route::get('/electricien', function () {
    return view('ouvriers.electricien');
})->name('electricien');

Route::get('/maquilleuse', function () {
    return view('ouvriers.maquilleuse');
})->name('maquilleuse');

Route::get('/mecanicien', function () {
    return view('ouvriers.mecanicien');
})->name('mecanicien');

Route::get('/platrier', function () {
    return view('ouvriers.platrier');
})->name('platrier');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profole.edit');
    Route::get('/profile', [ProfileController::class, 'update'])->name('profole.update');
    Route::get('/profile', [ProfileController::class, 'destroy'])->name('profole.destroy');

});


Route::get('/contact', [MailController::class, 'contact'])->name('contactpage');
Route::post('/contact', [MailController::class, 'contactSend'])->name('contactSend');

Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);

Route::post('/bar', [EtudiantController::class, 'bar']);

Route::controller(MetierController::class)->group(function () {

    Route::get('/metiers.index', 'index')->name('metiers.index');
    Route::get('/metiers.create', 'create');
    Route::get('/metiers.edit/{id}/edit', 'edit')->name('metiers.edit');
    Route::post('/metiers.update/{id}', 'update')->name('metiers.update');
    Route::post('/metiers.store', 'store')->name('metiers.store');
    Route::delete('/metiers.destroy/{id}', 'destroy')->name('metiers.destroy');;

});



