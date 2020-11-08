@extends('layout')
@section('pagina')


<div class="page-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
          <h5><b>Dados do pedido:</b></h5>
          <hr>
          <p class="mb-4"><b>Nome do destinatário:</b></p>
          <p class="mb-4">{{$pedido['nomedestinatario']}}</p>
          <p class="mb-4"><b>Código de Rastreamento:</b></p>
          <p class="mb-4">{{$pedido['rastreamento']}}</p>
          <p class="mb-4"><b>Telefone do destinatário:</b></p>
          <p class="mb-4">{{$pedido['telefonedestinatario']}}</p>
          <p class="mb-4"><b>Endereço do destinatário:</b></p>
          <p class="mb-4">{{$pedido['enderecodestinatario']}}</p>
        </div>
    </div>
  </div>
</div>


@endsection