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

    //FUNÇÃO SHOW PARA MOSTRAR OS REGISTROS INDIVIDUALMENTE
    public function show(Personagem $personagem)
    {
        return view('personagens.show', compact('personagem'));
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

    //FUNÇÃO PARA ACESSAR O FORMULARIO DE EDIÇÃO DE REGISTROS
    public function edit(Personagem $personagem)
    {
        return view('personagens.edit', compact('personagem'));
    }

    //FUNÇÃO UPDATE
    public function update(Request $request, Personagem $personagem)
    {
        // Valide os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'categoria' => 'required|string|max:255',
            'imagem' => 'required|string|max:255',
        ]);

        // Atualize os dados do personagem com base nos dados do formulário
        $personagem->update([
            'nome' => $request->nome,
            'descrição' => $request->descricao,
            'categoria' => $request->categoria,
            'imagem' => $request->imagem,
        ]);

        // Redirecione de volta para a página de detalhes do personagem com uma mensagem de sucesso
        return redirect()->route('dashboard', $personagem->id)->with('success', 'Personagem atualizado com sucesso.');
    }
    
    //FUNÇÃO DELETE
    public function destroy(Request $request, Personagem $personagem)
    {
        $personagem->delete();

        return redirect()->back()->with('success', 'Personagem excluído com sucesso.');
    }   

}
