<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $varHome = [
            (object) [
                "titre" => 'Fresh coffee',
                "titreSecond" => 'Worth Drinking',
                "texte" => 'Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!',
                "bouton" => 'Visit Us Today!',
            ],
            (object) [
                "titre" => 'Our promise',
                "titreSecond" => 'To You',
                "texte" => 'Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!',
            ]
        ];
        return view('home', compact('varHome'));
}
}
