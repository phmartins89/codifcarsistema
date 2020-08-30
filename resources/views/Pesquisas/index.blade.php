@extends('layout')

@section('cabecalho')
Lista de Orçamentos
@endsection

@section('conteudo')
        <a href="/pesquisas/cadastrar" class="btn btn-dark mb-2">Cadastrar</a>

        <ul class="list-group">
            @foreach($pesquisas as $pesquisa)
                <li class="list-group-item"> <?= $pesquisa; ?></li>
            @endforeach
        </ul>
@endsection





