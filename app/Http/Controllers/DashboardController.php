<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $dadosDoCrud = Personagem::all();

        return view('dashboard', ['dadosDoCrud' => $dadosDoCrud]);
    }
}
