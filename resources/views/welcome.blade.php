@extends('layout.layout')

@section('content')

    <a href="{{route('aluno-create')}}">
        <button class="btn btn-success">Novo registro</button>

    <table class="table table-dark table-striped p-2 mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">CPF</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">EMAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <th scope="row">{{$aluno->ID}}</th>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->cpf}}</td>
                    <td>{{$aluno->telefone}}</td>
                    <td>{{$aluno->email}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
