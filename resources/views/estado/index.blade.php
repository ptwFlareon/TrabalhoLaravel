@extends('layouts.tads')
@section('title')
    Lista de estados
@endsection

@section('conteudo')
    <h1>Estados</h1>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <a href="{{route('estados.create')}}" class="btn btn-success btn-sm">Novo</a>
    <hr>
    <form method="POST">
        @csrf
        @method('get')
        <input type="text" name="pesquisa" placeholder="pesquisar" class="form-control" style="max-width: 200px;">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>
    @if(isset($estados))
        @foreach($estados as $est)
            {{$est->nome}} 
            <h2 class="h3">
                <a href="{{route('estados.edit', ['estado'=>$est->id])}}" class="btn btn-info shadow">Editar</a>
                <a href="{{route('estados.confirm', ['estado'=>$est->id])}}" class="btn btn-danger shadow">Excluir</a>
            </h2>
        @endforeach

        {{$estados->links()}}    
    @endif

@endsection
