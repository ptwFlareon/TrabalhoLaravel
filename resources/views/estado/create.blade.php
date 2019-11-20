@extends('layouts.tads')

@section('title')
    Cadastro de Estado
@endsection

@section('conteudo')

    <a href="{{route('estados.index')}}" class="btn btn-warning text-light btn-sm">Voltar</a>
    <hr>

    <form method="post" 
    
    @if(isset($estado))
        action="{{route('estados.update',['estado'=>$estado->id])}}"
    @else
        action="{{route('estados.store')}}"
    @endif
    >
    @if(isset($estado))
        @method('put')
    @endif 
        @csrf

        <label>Nome do Estado</label>
        <input type="text" name="nome" placeholder="Nome do Estado" class="form-control-sm"
        @if(isset($estado))
            value="{{$estado->nome}}"
        @endif 
        >
        <label>Sigla</label>
        <input type="text" name="sigla" placeholder="Sigla" class="form-control-sm"
        @if(isset($estado))
            value="{{$estado->sigla}}"
        @endif 
        >
        <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
    </form>

    @if($errors->any())
        @foreach($errors->all() as $er)
            <div class="alert alert-danger">{{$er}}</div>
        @endforeach
    @endif

@endsection