<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
=======
use App\Http\Controllers\MailController;
>>>>>>> sendmail
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('ouvriers.accueil');
});

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
=======
Route::get('/contact', function () {
    return view('contact');
});

Route::get('send-mail',[MailController::class, 'index']);
Route::get('/contact',[MailController::class, 'contact'])->name('contactpage');
Route::post('/contact',[MailController::class, 'contactSend'])->name('contactsendpage');
>>>>>>> sendmail
