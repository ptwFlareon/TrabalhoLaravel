@extends('layouts.tads')

@section('title')
    Cadastro de Cidade
@endsection

@section('conteudo')

    <a href="{{route('cidades.index')}}" class="btn btn-warning text-light btn-sm">Voltar</a>
    <hr>

    <form method="post" 
    
    @if(isset($cidade))
        action="{{route('cidades.update',['cidade'=>$cidade->id])}}"
    @else
        action="{{route('cidades.store')}}"
    @endif
    >
    @if(isset($cidade))
        @method('put')
    @endif 
        @csrf

        <label>Nome da Cidade</label>
        <input type="text" name="nome" placeholder="Nome da Cidade" class="form-control-sm"
        @if(isset($cidade))
            value="{{$cidade->nome}}"
        @endif 
        >
        <label>Estado</label>
        <select name="estado_id"class="form-control">
			@if(isset($estados))
				@foreach($estados as $est)
					<option 
						@if(isset($cidade) && $cidade->estado() && $est->id == $cidade->estado->id) 
							selected 
						@endif 
						value="{{$est->id}}">{{$est->nome}}</option>
				@endforeach
			@else
				@if(isset($cidade))
					<option selected value="{{$cidade->estado->id}}">{{$cidade->estado->nome}}</option>
				@endif
			@endif
		</select>
        
        <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
    </form>

    @if($errors->any())
        @foreach($errors->all() as $er)
            <div class="alert alert-danger">{{$er}}</div>
        @endforeach
    @endif

@endsection