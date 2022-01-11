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

// Route::get('/', function () {
//     // $test = 'Hi';
//     // return view('home', compact('test'));
// });


// Строковый синтаксис
Route::get('/', 'MainController@Index');

Route::get('/search', 'MainController@search')->name('search');

// Action-синтаксис (не забудьте импортировать класс контроллера)
use App\Http\Controllers\MainController;
Route::get('/', [ MainController::class, 'index' ]);

