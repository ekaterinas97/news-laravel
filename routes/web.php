<?php

use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\WelcomePageController;
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
})->name('welcome');

Route::get('/info', [WelcomePageController::class, 'index'])->name('info');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function (): void{
    Route::get('/', IndexController::class)->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});


// news routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');







// homework1
//Route::get('/home', function (){
//   return "Страница приветствия пользователей";
//});
//
//Route::get('/info', function (){
//    return "Страница с информацией о проекте";
//});
//
//Route::get('/news', function (){
//    return "Страница для вывода новостей";
//});
