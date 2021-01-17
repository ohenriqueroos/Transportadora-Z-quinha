@extends('layoutadmin')
@section('admin')

<div class="page-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
          <h5><b>Dados do pedido:</b></h5>
          <hr>
          <p class="mb-2"><b>Número da Entrega:</b></p>
          <p class="mb-2">{{$pedido['id_pedido']}}</p>
          <p class="mb-2"><b>Nome do destinatário:</b></p>
          <p class="mb-2">{{$pedido['nomedestinatario']}}</p>
          <p class="mb-2"><b>Código de Rastreamento:</b></p>
          <p class="mb-2">{{$pedido['rastreamento']}}</p> 
          <p class="mb-2"><b>Endereço do Destinatário:</b></p>
          <p class="mb-2">{{$pedido['enderecodestinatario']}}</p>
          <p class="mb-2"><b>Telefone do Destinatário:</b></p>
          <p class="mb-2">{{$pedido['telefonedestinatario']}}</p>
        </div>
    </div>
  </div>
</div>


