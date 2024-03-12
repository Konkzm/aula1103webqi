@extends('layout.layout')

@section('content')

    <section class="container">
    <form>
        <fieldset>
            <legend>
                Cadastrar aluno 
            </legend>
            <label>Nome completo</label>
            <input type="text" name="nome"/>
            <label>Cpf</label>
            <input type="text" name="cpf"/>
            <label>Telefone</label>
            <input type="tel" name="telefone"/>
            <label>Email</label>
            <input type="email" name="email"/>
            <button type="submit">Cadastrar</button>
        </fieldset> 
    </form>
    </section>
@endsection