@extends('layout')
@section('pagina')

@foreach ($pedido as $val)
<div class="page-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
          <h5><b>Nome do Destinatário:</b></h5>
          <p class="mb-4">Código de Rastreamento:</p>
          <p class="mb-4">{{ $val['rastreamento'] }}</p>
          <p class="mb-4">{{ $val['nomedestinatario'] }}</p>
          <hr>
          <a href="pedido/{{$val['nomedestinatario']}}" style="color: rgba(237, 32, 36)">
          Veja mais detalhes!
          </a>
        </div>
    </div>
  </div>
</div>
@endforeach

<!-- @foreach ($pedido as $val)
<div class="page-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
          <h5>Dados da entrega:</h5>
          <hr>
          <h6><b>Nome do Destinatário:</b></h6>
          <p class="mb-4">{{ $val['nomedestinatario'] }}</p>
          <h6><b>Telefone do Destinatário:</b></h6>
          <p class="mb-4">{{ $val['telefonedestinatario'] }}</p>
          <h6><b>Endereço do Destinatário:</b></h6>
          <p class="mb-4">{{ $val['enderecodestinatario'] }}</p>
        </div>
    </div>
  </div>
</div>
@endforeach -->

@endsection