<?php

use App\Http\Controllers\PageController;
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
    return view('welcome');
});
//1
Route:: view('/welcome', 'welcome');
//2
Route:: view('/home', 'home')->name('home');
//3
Route::get('/about', [PageController::class, 'about' ])->name('about');
//4
Route::get('/profile', [PageController::class, 'profile']);
//5
Route::get('/date', [PageController::class, 'date'])->name('date');
//6
Route::get('/message', [PageController::class, 'message']);
//7
Route::get('/text', [PageController::class, 'text']);
//8
Route::get('/greeting', [PageController::class, 'greeting']);
//9
Route::get('/status', [PageController::class , 'status']);
//10
Route::get('/empty', [PageController::class , 'empty']);
//11
Route::get('/switch', [PageController::class , 'switch']);
//12
Route::get('/numbers', [PageController::class , 'numbers']);
//13
Route::get('/list', [PageController::class , 'list']);
//14
Route::get('/items', [PageController::class , 'items']);
//15
Route::get('/break', [PageController::class , 'break']);
//16 - 17
Route::get('/php', [PageController::class , 'php']);
//18
Route::get('/class', [PageController::class , 'class']);
//19
Route::get('/style', [PageController::class , 'style']);
//20
Route::get('/checked', [PageController::class , 'checked']);
//21
Route::get('/selected', [PageController::class , 'selected']);
//22
Route::get('/disabled', [PageController::class , 'disabled']);
//23
Route::view('/readonly', 'readonly');
//24
Route::view('/main', 'required');
//25
Route::view('/main', 'main');
//28
Route::get('/users', function(){
    $users =['Alex', 'Job', 'Bob'];
    return view('users', ['users' => $users]);
});

Route::view('/layout', 'layout');
Route::view('/yield', 'yield');
Route::view('/section', 'section');