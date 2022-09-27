<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view ('home');
    }

    public function quienesSomos(){
        return view ('quienes-somos');
    }

    public function productos(){
        return view ('productos');
    }

    public function reservas(){
        return view ('reservas');
    }

    public function contacto(){
        return view ('contacto');
    }
}
