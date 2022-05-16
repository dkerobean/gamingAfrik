     <?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers' ,'prefix' => 'admin', 'middleware'=>'is_admin'], function() {
    Route::Resource('/dashboard', 'AdminController');
    Route::Resource('/tournament', 'TournamentController');
    Route::Resource('/contacts', 'ContactController');
    Route::Resource('/games', 'GamesController');
    Route::Resource('/users', 'UsersController');


  });

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('welcome');
Route::get('/profile', [App\Http\Controllers\PagesController::class, 'profile'])->name('profile');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::Resource('/tournaments', App\Http\Controllers\UserTournament::class);
Route::Resource('/edit', App\Http\Controllers\EditUSerController::class);
