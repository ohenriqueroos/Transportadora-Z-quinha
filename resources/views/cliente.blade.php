@extends('layout')
@section('pagina')

@foreach ($cliente as $cliente)
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
          <p class="mb-2"><b>Email:</b></p>
          <p class="mb-2">{{ $cliente['email'] }}</p>
          <hr>
          <a href="cliente/{{$cliente['id_cliente']}}" style="color: rgba(237, 32, 36)">
          Veja mais detalhes!
          </a>
          </div>
          </form>
        </div>
    </div>
  </div>
</div>
@endforeach

@endsection