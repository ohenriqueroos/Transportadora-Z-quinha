@extends('layout')
@section('pagina')

<div class="page-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
          <h5><b>Dados do Cliente:</b></h5>
          <hr>
          <form method="POST" action="updateCliente">
          @csrf
          <p class="mb-2"><b>Nome Completo:</b></p>
          <p class="mb-2">{{ $cliente['nomecompleto'] }}</p>
          <input type="hidden" name="id_cliente" value="{{ $cliente['id_cliente'] }}">
          <input class="form-control" type="text" name="nomecompleto" value="{{$cliente['nomecompleto']}}">
          <p class="mb-2"><b>Email:</b></p>
          <p class="mb-2">{{ $cliente['email'] }}</p>
          <input type="hidden" name="id_cliente" value="{{ $cliente['id_cliente'] }}">
          <input class="form-control" type="text" name="email" value="{{$cliente['email']}}">
          <p class="mb-2"><b>Telefone:</b></p>
          <p class="mb-2">{{ $cliente['telefone'] }}</p>
          <input type="hidden" name="id_cliente" value="{{ $cliente['id_cliente'] }}">
          <input class="form-control" type="text" name="telefone" value="{{$cliente['telefone']}}">
          <p class="mb-2"><b>Endereço:</b></p>
          <p class="mb-2">{{ $cliente['endereco'] }}</p>
          <input type="hidden" name="id_cliente" value="{{ $cliente['id_cliente'] }}">
          <input class="form-control" type="text" name="endereco" value="{{$cliente['endereco']}}">
          <p class="mb-2"><b>CPF:</b></p>
          <p class="mb-2">{{ $cliente['cpf'] }}</p>
          <input type="hidden" name="id_cliente" value="{{ $cliente['id_cliente'] }}">
          <input class="form-control" type="text" name="cpf" value="{{$cliente['cpf']}}">
          <p class="mb-2"><b>Data de Nascimento:</b></p>
          <p class="mb-2">{{ $cliente['datanascimento'] }}</p>
          <input type="hidden" name="id_cliente" value="{{ $cliente['id_cliente'] }}">
          <input class="form-control" type="text" name="datanascimento" value="{{$cliente['datanascimento']}}">
          <p class="mb-2"><b>Senha:</b></p>
          <p class="mb-2">{{ $cliente['senha'] }}</p>
          <input type="hidden" name="id_cliente" value="{{ $cliente['id_cliente'] }}">
          <input class="form-control" type="text" name="senha" value="{{$cliente['senha']}}">
          <hr>
          <div class="form-group mt-4 wow fadeInUp">
          <button type="submit" class="btn btn-primary">Alterar</button>
          </div>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection