<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/plombier', function () {
    return view('ouvriers.plombier');
})->name('plombier');

Route::get('/tapissier', function () {
    return view('ouvriers.tapissier');
})->name('tapissier');

Route::get('/traiteur', function () {
    return view('ouvriers.traiteur');
})->name('traiteur');

Route::get('/tailleur', function () {
    return view('ouvriers.tailleur');
})->name('tailleur');

Route::get('/cuisier', function () {
    return view('ouvriers.cuisier');
})->name('cuisier');

Route::get('/peintre', function () {
    return view('ouvriers.peintre');
})->name('peintre');

Route::get('/coiffureh', function () {
    return view('ouvriers.coiffureh');
})->name('coiffureh');

Route::get('/menuisier', function () {
    return view('ouvriers.menuisier');
})->name('menuisier');

Route::get('/culte', function () {
    return view('ouvriers.culte');
})->name('culte');

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


