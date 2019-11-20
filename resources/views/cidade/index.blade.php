@extends('layouts.tads')
@section('title')
    Lista de cidades
@endsection

@section('conteudo')
    <h1>Cidades</h1>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <a href="{{route('cidades.create')}}" class="btn btn-success btn-sm">Novo</a>
    <hr>
    <form method="POST">
        @csrf
        @method('get')
        <input type="text" name="pesquisa" placeholder="pesquisar" class="form-control" style="max-width: 200px;">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>
    @if(isset($cidades))
        @foreach($cidades as $cid)
            {{$cid->nome}} 
            <h2 class="h3">
                <a href="{{route('cidades.edit', ['cidade'=>$cid->id])}}" class="btn btn-info shadow">Editar</a>
                <a href="{{route('cidades.confirm', ['cidade'=>$cid->id])}}" class="btn btn-danger shadow">Excluir</a>
            </h2>
        @endforeach

        {{$cidades->links()}}    
    @endif

@endsection
