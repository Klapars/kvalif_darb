<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StandingsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/standings', [StandingsController::class, 'index'])->name('standings');
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/scraper', [App\Http\Controllers\ScraperController::class, 'index'])->name('scraper');
//Route::get(
//    uri: 'scraper', 
//    action: [App\Http\Controllers\ScraperController::class, 'scraper']
//)
//->name(name:'scraper');

