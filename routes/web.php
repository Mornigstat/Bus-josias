<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ListesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MalisteController;
use App\Http\Controllers\MonprofileController;
use App\Http\Controllers\DashboardController;


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
    return view('welcome');
});

Route::resource('Accueil', HomeController::class);
Route::resource('Apropos', AboutController::class);
Route::resource('Listes', ListesController::class);
Route::resource('Contacts', ContactsController::class);
Route::resource('Login', LoginController::class);
Route::resource('Register', RegisterController::class);
Route::resource('Maliste', MalisteController::class);
Route::resource('Monprofile', MonprofileController::class);
Route::resource('Dashboard', DashboardController::class);

