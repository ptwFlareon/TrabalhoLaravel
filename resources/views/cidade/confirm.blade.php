@extends('layouts.tads')
@section('title')
    Confirmar exclusão
@endsection

@section('conteudo')
<h1>Excluir Cidade</h1>
<h3>Deseja realmente excluir {{$cidade->nome}}</h3>
<form method="post" action="{{route('cidades.destroy', ['cidade'=>$cidade->id])}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">SIM</button>
</form>
<a href="{{route('cidades.index')}}">
Não
</a>
@endsection
