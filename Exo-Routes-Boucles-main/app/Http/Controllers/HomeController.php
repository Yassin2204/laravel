<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function yas() {
        $nom = "cactus";
        $age = "34";
        return view('home', compact('nom', 'age'));
    }
    public function yas2() {
        return view('',);
    }
    public function yas3() {
        return view('',);
    }
    public function yas4() {    
        return view('',);
    }
    public function yas5() {
        return view('',);
    }
    
}