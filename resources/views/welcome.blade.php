@extends('layout.layout')

@section('content')

@if (session('success'))
<div class="alert alert-success" role="alert">
    A simple success alert—check it out!
    {(session('success'))}
</div>
@endif

@endsection