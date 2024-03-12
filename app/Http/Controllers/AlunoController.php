<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Exception;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $resposta){
        try{
            Aluno::create($resposta->all()); //testando
            echo "Cadastrado com Sucesso";
        }catch(Exception $e){
            echo $e->getMessage(); //testando
        }
            
    }
}
