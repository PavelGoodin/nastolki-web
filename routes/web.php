<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('dashboard');
});

Auth::routes();

/*
Route::view('/private','private')->middleware('auth')->name('private');

Route::get('/login', function(){
    if(Auth::check()){
        return redirect(route('user.private'));
    }

    return view('login');
})->name('login');

Route::get('/registrasion', function(){

    if(Auth::check()){
        return redirect(route('user.private'));
    }

    return view('registration');
});
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
