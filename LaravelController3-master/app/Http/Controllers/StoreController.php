<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $varOpen =
            (object)[
            "titre" => "Come On In",
            "titreSecond" => "We're Open",
            "closed"=>"Closed"]
            ;
        $varHours = "7:00 AM TO 8:00";
        $varSaturday = "9:00 AM TO 5:00 PM";
        $varAdresse = (object)[
        "titre" => "1160 Orchard Street",
        "titreSecond" => "Golden Valley, Minnesota",
        "call" => "Call Anytime",
        "num" => "(317) 585-8468"
        ];
        $varDays = [
            (object)["monday" => "Monday"
            ,"tuesday" => "Tuesday", "wednesday" => "Wednesday","thursday" => "Thursday", "friday" => "Friday", "saturday" => "Saturday", "sunday" => "Sunday"  ]
        ];
        $varAbout =[
            (object) [
                "titre" => 'Strong coffee, strong roots',
                "titreSecond" => 'About our café',
                "texte" => 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe',
                "texteSecond" => 'We guarantee that you will fall in lust with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.',
            ]];
        return view('pages.store', compact("varOpen", "varHours", "varSaturday","varDays","varAdresse","varAbout"));
    }
}
