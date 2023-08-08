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


