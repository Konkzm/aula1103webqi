@extends('layout.layout')

@section('content')

    <section class="container">
    <form action="{{route('aluno-store')}}" method="POST">
        @csrf
        <fieldset>
            <legend>
                Cadastrar aluno 
            </legend>
            <label>Nome completo</label>
            <input type="text" name="nome"/>
            <label>Cpf</label>
            <input type="text" name="cpf" class="cpf"/>
            <label>Telefone</label>
            <input type="tel" name="telefone" class="phone"/>
            <label>Email</label>
            <input type="email" name="email"/>
            <button type="submit">Cadastrar</button>
        </fieldset> 
    </form>

    <script> $('.cpf').mask('000.000.000-00', {reverse: true}); </script>
    <script> $('.phone').mask('(00) 00000-0000'); </script>
    
    </section>
@endsection


