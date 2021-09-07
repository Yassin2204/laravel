<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'yas']);

Route::get('/contact/sav', function () {
    return view('infos.contact.sav');
})->name('sav');

Route::get('/contact/partenariat', function () {
    return view('infos.contact.partenariat');
})->name('partenariat');

Route::get('/contact/info', function () {
    return view('infos.contact.info');
})->name('info');

Route::get('/team/front', function () {
    return view('team.web.dev.frontend');
})->name('frontend');

Route::get('/team/backend', function () {
    return view('team.web.dev.backend');
})->name('backend');

view()->composer(['*'],function ($view) {
    $back=[
        'personne1'=>[
            'nom'=>'Handy', 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ],
        'personne2'=>[
            'nom'=>'Hendeck', 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ],
        'personne3'=>[
            'nom'=>'Harouf', 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ],
        'personne4'=>[
            'nom'=>'Hancock', 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ]

    ];
    
    $front=[
        'personne1'=>[
            'nom'=>'Handy front', 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ],
        'personne2'=>[
            'nom'=>'Hendeck front', 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ],
        'personne3'=>[
            'nom'=>'Harouf front', 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ],
        'personne4'=>[
            'nom'=>'Hancock front',a§bv a         a                 a                 a                 a                 a     bquaquuaua udyv"da@'ezwaxzdcèaqçaz(((auè!a!aaaaaa)ya)))aaauaa----a----------------a---------------a--------------a----------------uauua-a-uùauaùma))))aapaaaaaaaauaaauuauuuuauuuuuauauaU8+7uay 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ],
        'personne5'=>[
            'nom'=>'Hmihay front', 
            'fonction'=>'Backend dev', 
            'image'=> asset('img/salade.jpg')
        ]

    ];
    $view->with('back',$back);
    $view->with('front',$front);
});


