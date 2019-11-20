@extends('layouts.tads')
@section('title')
    Confirmar exclusão
@endsection

@section('conteudo')
<h1>Excluir Estado</h1>
<h3>Deseja realmente excluir {{$estado->nome}}</h3>
<form method="post" action="{{route('estados.destroy', ['estado'=>$estado->id])}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">SIM</button>
</form>
@endsection
