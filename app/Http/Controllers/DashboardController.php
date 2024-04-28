<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //FUNÇÃO READ
    public function index(){
        $dadosDoCrud = Personagem::all();

        return view('dashboard', ['dadosDoCrud' => $dadosDoCrud]);
    }

    //FUNÇÃO PARA ACESSAR O FORMULARIO DE CRIAÇÃO DE REGISTROS
    public function create(){
        return view('personagens.create');
    }

    //FUNÇÃO CREATE
    public function store(Request $request)
    {
        // Valide os dados do formulário
        $request->validate([
            'nome' => 'required',
            'descrição' => 'required',
            'categoria' => 'required',
            'imagem' => 'required',
        ]);

        // Crie um novo personagem com os dados do formulário
        Personagem::create([
            'nome' => $request->nome,
            'descrição' => $request->descrição,
            'categoria' => $request->categoria,
            'imagem' => $request->imagem,
        ]);

        // Redirecione de volta para alguma página após a criação bem-sucedida
        return redirect()->route('dashboard')->with('success', 'Personagem adicionado com sucesso!');
    }

}
