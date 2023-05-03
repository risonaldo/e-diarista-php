<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aa\

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::get();

        dd($servicos);

        return view('servicos.index');
    }
}
