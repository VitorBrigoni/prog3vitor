{{-- Utiliza do base.blade para repetir a estrutura criada --}}
@extends('templates.base')
@section('title', 'Editar Recado')
@section('h1', 'Editar Recado')

@section('content')
<div class="row">
    <div class="col-4">
        {{-- Criação do formulário para criar o recado --}}
        <form method="post" action="{{ route('recados.update', $reca) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$reca->nome}}">
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3">{{$reca->comentario}}</textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>

    </div>
</div>
@endsection