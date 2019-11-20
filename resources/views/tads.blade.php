@extends('layouts.tads')
@section('title')
    Minha tela TADS
@endsection

@section('conteudo')
    <h1>TADS - YEP</h1>

    @isset($msg)
        <h2>{{$msg}}</h2>
    @endisset

    <form method="post">
        @csrf
        <button type="submit">Enviar</button>
    </form>
@endsection
