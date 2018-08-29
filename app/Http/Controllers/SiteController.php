<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function grupo()
    {
        return view('grupo');
    }

    public function pesquisas()
    {
        return view('pesquisas');
    }

    public function portifolio()
    {
        return view('portifolio');
    }

    public function contato()
    {
        return view('contato');
    }
}
