<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home', ['title'=> 'Warung Kopi Klotok']);
    }
    public function menu(){
        return view('menu', ['title'=> 'Menu Warung Kopi Klotok']);
    }
    public function tempat(){
        return view('tempat', ['title'=> 'Tempat Warung Kopi Klotok']);
    }
    public function order(){
        return view('order', ['title'=> 'Order Warung Kopi Klotok']);
    }
}
