<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes();

Route::get('/home', function (){
    return redirect()->route('dashboard');
})->name('home');
Route::group(['middleware' => ['web']], function () {
    Route::get('dashboard',function (){
        return view('backend.dashboard');
    })->name('dashboard');
});
