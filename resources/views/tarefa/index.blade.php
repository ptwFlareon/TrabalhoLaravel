@extends('layouts.tads')
@section('title')
    Lista de tarefas
@endsection

@section('conteudo')
    <h1>Tarefas</h1>
    <form method="POST">
        @csrf
        @method('get')
        <input type="text" name="pesquisa" placeholder="pesquisar">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>
    @if(isset($tarefas))
        @foreach($tarefas as $tar)
            <h2>{{$tar->descricao}}</h2>
        @endforeach

        {{$tarefas->links()}}    
    @endif

@endsection
