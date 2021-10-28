{{-- Utiliza do template ja feito no base.blade --}}
@extends('templates.base')
@section('title', 'Recados')
@section('h1', 'Página de Recados')

@section('content')
<div class="row">
    <div class="col">
        <p>Sejam bem-vindos à página de recados</p>
        {{-- Botão que leva para a página de criação de um novo recado --}}
        <a class="btn btn-primary" href="{{route('recados.inserir')}}" role="button">Criar recado</a>

    </div>
</div>

<div class="row">
    <table class="table">
        <tr>
            <th>ID</th>
            <th width="50%">Nome</th>
            <th>Comentário</th>
        </tr>
        {{-- Escreve os comentarios ja criados --}}
        @foreach ($recados as $reca)
        <tr>
            <td>{{ $reca->id }}</td>
            <td>{{ $reca->nome }}</td>
            <td>{{ $reca->comentario }}</td>
            <td>
                {{-- Cria os botões de Editar e Apagar na página --}}
                <a href="{{ route('recados.edit', $reca) }}" class="btn btn-primary btn-sm" role="button"><i class="bi bi-pencil-square"></i> Editar</a>
                @if (session('usuario'))
                    <a href="{{ route('recados.remove', $reca) }}" class="btn btn-danger btn-sm" role="button"><i class="bi bi-trash"></i> Apagar</a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection