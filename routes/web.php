<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'welcome']);

Route::get('/ados', [PagesController::class, 'ados'])->name('ados');
Route::get('/moxo', [PagesController::class, 'moxo'])->name('moxo');
Route::get('/kontakt', [PagesController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'send']);

Route::domain('{city}' . config('app.domain'))->group(function () {
    Route::get('/', function ($city) {
        return view('welcome')->with(compact('city'));
    });

    Route::post('contact', [ContactController::class, 'send']);
});
