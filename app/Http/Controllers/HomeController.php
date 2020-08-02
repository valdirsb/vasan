<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function quemSomos()
    {
        return view('quemsomos');
    }

    public function servicos()
    {
        return view('servicos');
    }

    public function produtos()
    {
        return view('produtos');
    }

    public function faleconosco()
    {
        return view('faleconosco');
    }
}
