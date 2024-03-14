<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Exception;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //
    public function index(){
        $alunos = Aluno::all();
        return view('welcome', ['alunos'=>$alunos]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $resposta){
        try{
            Aluno::create($resposta->all()); //testando
            return redirect()->route('aluno-create')->with('success', 'Cadastrado com Sucesso!');
        }catch(Exception $e){
            return redirect()->route('aluno-create')->with('error', 'tente novamente mais tarde');
        }
            
    }
}

