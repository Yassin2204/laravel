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

Route::get('/contact/info', function () {
    return view('infos.contact.info');
})->name('info');

Route::get('/contact/partenariat', function () {
    return view('infos.contact.partenariat');
})->name('partenariat');

Route::get('/contact/sav', function () {
    return view('infos.contact.sav');
})->name('sav');

view()->composer(['*'], function ($view) {
    $front = [
        'perso1' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
        'perso2' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
        'perso3' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
        'perso4' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
        'perso5' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
    ];
    
    $back = [
        'perso1' => [
            'nom' => 'charles',
            'fonction' => 'back',
            'photo' => asset('images/tete.jpg')
        ],
        'perso2' => [
            'nom' => 'charles',
            'fonction' => 'back',
            'photo' => asset('images/tete.jpg')
        ],
        'perso3' => [
            'nom' => 'charles',
            'fonction' => 'back',
            'photo' => asset('images/tete.jpg')
        ],
        'perso4' => [
            'nom' => 'charles',
            'fonction' => 'back',
            'photo' => asset('images/tete.jpg')
        ],
    ];

    $view -> with('front', $front);
    $view -> with('back', $back);
});

Route::get('/team/front', function () { 
    return view('team.web.dev.frontend');
})->name('font');

Route::get('/team/back', function () {
    return view('team.web.dev.backend');
})->name('back');


Route::get('/home', function () {
    return view('layouts.home');
})->name('home');