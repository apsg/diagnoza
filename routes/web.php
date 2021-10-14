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


Route::domain('{city}.diagnoza.local')->group(function () {
    Route::get('/', function ($city) {
        return view('welcome')->with(compact('city'));
    });
});

Route::get('/{a?}', function ($a = null) {
    return redirect('http://test.diagnoza.local/' );
});
