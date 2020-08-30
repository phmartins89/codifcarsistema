@extends('layout')

@section('cabecalho')
  Adicionar Orçamento
@endsection

@section('conteudo')
       <form method="post">
           @csrf
            <div class="form-group">
                <label for="nome">Nome do Cliente</label>
                <input type="text" class="form-control" name="nome" id="nome"> <!--Caixas de input -->
            </div>

            <button class="btn btn-primary">Adicionar</button>
        </form>

@endsection