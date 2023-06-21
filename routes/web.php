<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/cases', [PagesController::class, 'cases']);
Route::get('/case/{id}', [PagesController::class, 'case']);
Route::get('/rnf', [PagesController::class, 'rnf']);
Route::get('/news', [PagesController::class, 'news']);
Route::get('/equipment', [PagesController::class, 'equipment']);
Route::get('/contacts', [PagesController::class, 'contacts']);

Route::get('/news/{id}', [PagesController::class, 'one_news']);
Route::group([
    'middleware' => 'is_admin',
    'prefix' => 'admin'
    ],function (){
    Route::get('/', [PagesController::class, 'admin']);
    Route::resource('boxes' , '\App\Http\Controllers\Admin\Resources\BoxController');
    Route::resource('feeds',\App\Http\Controllers\Admin\Resources\FeedController::class);
    }
);
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class,'logout']);

Auth::routes([
    'reset'=>false,
    'register' => false,
    'confirm' => false,
    'verify' => false
]);
