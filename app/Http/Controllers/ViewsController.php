<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function home() {

        return view('home', array(
            'title' => 'Inicio'
        ));

    }

    public function carta() {

        return view('carta', array(
            'title' => 'Carta de presentació'
        ));

    }
}
