@extends('layout')

@section('cabecalho')
Lista de Orçamentos
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

        <a href="/pesquisas/cadastrar" class="btn btn-dark mb-2">Cadastrar</a>

        <ul class="list-group">
            @foreach($orcamentos as $orcamento)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $orcamento->nome }}
                    <form method="post" action="/series/{{ $orcamento->id }}"
                          onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($orcamento->nome) }}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
@endsection





