<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::paginate(15);
        return view('servicos.index')->with('servicos', $servicos);
    }
}
