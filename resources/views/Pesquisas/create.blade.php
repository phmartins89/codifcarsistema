@extends('layout')

@section('cabecalho')
  Adicionar Orçamento
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post">
           @csrf
            <div class="form-group">
                <label for="nome" class="">Nome do Cliente</label>
                <input type="text" class="form-control" name="nome" id="nome"> <!--Caixas de input -->
            </div>

            <button class="btn btn-primary">Adicionar</button>
        </form>

@endsection
