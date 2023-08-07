<?php

use App\Http\Controllers\MailController;
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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('send-mail',[MailController::class, 'index']);
Route::get('/contact',[MailController::class, 'contact'])->name('contactpage');
Route::post('/contact',[MailController::class, 'contactSend'])->name('contactsendpage');