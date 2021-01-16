@extends('layout')
@section('pagina')

@php
$i = 0;
@endphp
@while ($i < count($pedido))
  <div class="page-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="pt-5 col-lg-8">
          <div class="card-page">
            <h5><b>Entrega:</b></h5>
            <hr>
            <p class="mb-2"><b>Código de Rastreamento:</b></p>
            <p class="mb-2">{{ $pedido[$i]['rastreamento'] }}</p>
            <p class="mb-2"><b>Nome do Destinatário:</b></p>
            <p class="mb-2">{{ $pedido[$i]['nomedestinatario'] }}</p>
            <hr>
            <a href="pedido/{{$pedido[$i]['rastreamento']}}" style="color: rgba(237, 32, 36)">
            Veja mais detalhes!
            </a>
          </div>
      </div>
    </div>
  </div> 
@php 
  $i++;
@endphp 
@endwhile

@if($i == 0)
<div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="pt-5 mb-5 col-lg-8">
          <div class="card-page">
            <h5><b>Você não possui pedidos cadastrados!</b></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@endsection