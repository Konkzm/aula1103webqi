@extends('layout.layout')

@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <section class="container d-flex flex-column">
        <form action="{{ route('aluno-store') }}" method="POST">
            @csrf
            <fieldset class="d-flex flex-column p-5 mt-5">
                <legend>
                    Cadastrar aluno
                </legend>
                <label>Nome completo</label>
                <input type="text" name="nome" class="form-control" />
                <label>Cpf</label>
                <input type="text" name="cpf" class="cpf" />
                <label>Telefone</label>
                <input type="tel" name="telefone" class="phone form-control" />
                <label>Email</label>
                <input type="email" name="email" />
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </fieldset>
        </form>

        <script>
            $('.cpf').mask('000.000.000-00', {
                reverse: true
            });
        </script>
        <script>
            $('.phone').mask('(00) 00000-0000');
        </script>

    </section>
@endsection
