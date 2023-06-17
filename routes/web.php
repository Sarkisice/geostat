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

Route::get('/', [PagesController::class, 'index']);
Route::get('/cases', [PagesController::class, 'cases']);
Route::get('/case/{id}', [PagesController::class, 'case']);
Route::get('/rnf', [PagesController::class, 'rnf']);
Route::get('/news', [PagesController::class, 'news']);
Route::get('/equipment', [PagesController::class, 'equipment']);
Route::get('/contacts', [PagesController::class, 'contacts']);

Route::get('/news/{id}', [PagesController::class, 'one_news']);
Route::get('/admin', [PagesController::class, 'admin']);
Route::get('/admin/news', [PagesController::class, 'aNews']);
Route::get('/admin/box', [PagesController::class, 'aBox']);
Route::get('/admin/equipment', [PagesController::class, 'aEquipment']);
Route::get('/admin/staff', [PagesController::class, 'aStaff']);

Route::get('/admin/news/create', [PagesController::class, 'aNewsCreate']);
Route::get('/admin/box/create', [PagesController::class, 'aBoxCreate']);
Route::get('/admin/equipment/create', [PagesController::class, 'aEquipmentCreate']);
Route::get('/admin/staff/create', [PagesController::class, 'aStaffCreate']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
