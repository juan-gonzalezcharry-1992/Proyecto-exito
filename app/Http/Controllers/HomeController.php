<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        return view('welcome');
    }

    public function estibas() {
        return view('inicio.estibas');
    }

    public function formaletas() {
        return view('inicio.formaletas');
    }

    public function huacales() {
        return view('inicio.huacales');
    }

    public function secado() {
        return view('inicio.secado');
    }
}
