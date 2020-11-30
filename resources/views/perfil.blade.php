@extends('layout')
@section('pagina')

<div class="page-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
        <form method="POST" action="updateCliente">
          @csrf
        @if (Session::has('cliente'))
          <h5><b>Perfil:</b></h5>
          <hr>
          <p class="mb-2"><b>Nome Completo:</b></p>
          <input type="hidden" name="id_cliente" value="{{ Session::get('cliente')->id_cliente }}">
          <input class="form-control" type="text" name="nomecompleto" value="{{ Session::get('cliente')->nomecompleto }}">
          <p class="mb-2"><b>Email:</b></p>
          <input type="hidden" name="id_cliente" value="{{ Session::get('cliente')->id_cliente }}">
          <input class="form-control" type="text" name="email" value="{{ Session::get('cliente')->email }}">
          <p class="mb-2"><b>Telefone:</b></p>
          <input type="hidden" name="id_cliente" value="{{ Session::get('cliente')->id_cliente }}">
          <input class="form-control" type="text" name="telefone" value="{{ Session::get('cliente')->telefone }}">
          <p class="mb-2"><b>Endereço:</b></p>
          <input type="hidden" name="id_cliente" value="{{ Session::get('cliente')->id_cliente }}">
          <input class="form-control" type="text" name="endereco" value="{{ Session::get('cliente')->endereco }}">
          <p class="mb-2"><b>CPF:</b></p>
          <input type="hidden" name="id_cliente" value="{{ Session::get('cliente')->id_cliente }}">
          <input class="form-control" type="text" name="cpf" value="{{ Session::get('cliente')->cpf }}">
          <p class="mb-2"><b>Data de Nascimento:</b></p>
          <input type="hidden" name="id_cliente" value="{{ Session::get('cliente')->id_cliente }}">
          <input class="form-control" type="text" name="datanascimento" value="{{ Session::get('cliente')->datanascimento }}">
          <p class="mb-2"><b>Senha:</b></p>
          <input type="hidden" name="id_cliente" value="{{ Session::get('cliente')->id_cliente }}">
          <input class="form-control" type="text" name="senha" value="{{ Session::get('cliente')->senha }}">
          <div class="form-group mt-4 wow fadeInUp">
          <button type="submit" class="btn btn-primary">Alterar</button>
          </div>
        @endif
        </form>
        </div>
    </div>
  </div>
</div>
@endsection