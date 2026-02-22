<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcomecontroller extends Controller
{
    public function index(){
        $menus = [
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'About', 'url' => '/about'],
        ['name' => 'Contact', 'url' => '/contact'],
    ];
        return view('welcome' , compact('menus'));
    }
}
