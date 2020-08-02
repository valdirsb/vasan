<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        return view('produtos');
    }

    public function vasandelivery()
    {
        return view('produtos.vasandelivery');
    }

    public function vasanadvogados()
    {
        return view('produtos.vasanadvogados');
    }

    public function vasanglpi()
    {
        return view('produtos.vasanglpi');
    }

    public function vasanlojavirtual()
    {
        return view('produtos.vasanlojavirtual');
    }
}
