@extends('layout')
@section('pagina')

<div class="page-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
        <form method="POST" action="perfil">
          @csrf
          <h5><b>Perfil:</b></h5>
          <hr>
          <p class="mb-2"><b>Nome Completo:</b></p>
          <input type="hidden" name="id_cliente" value="{{ $cliente['id_cliente'] }}">
          <input class="form-control" type="text" name="nomecompleto" value="{{ $cliente['nomecompleto'] }}">
          <p class="mb-2"><b>Email:</b></p>
          {{ Session::get('cliente')->email }}
          <p class="mb-2"><b>Telefone:</b></p>
          <input class="form-control" type="text" name="telefone" value="{{ $cliente['telefone'] }}">
          <p class="mb-2"><b>Endereço:</b></p>
          <input class="form-control" type="text" name="endereco" value="{{ $cliente['endereco'] }}">
          <p>Ex.: Avenida das Batatas, 321 Bairro: Centro - Timbó-SC</p>
          <p class="mb-2"><b>CPF:</b></p>
          <input class="form-control" type="text" name="cpf" value="{{ $cliente['cpf'] }}">
          <p class="mb-2"><b>Data de Nascimento:</b></p>
          <input class="form-control" type="text" name="datanascimento" value="{{ $cliente['datanascimento'] }}">
          <p class="mb-2"><b>Nova Senha:</b></p>
          <input class="form-control" type="password" name="novasenha" value="">
          <div class="form-group mt-4 wow fadeInUp">
          <button type="submit" class="btn btn-primary">Alterar</button>
          </div>
        </form>
        </div>
    </div>
  </div>
</div>
@endsection