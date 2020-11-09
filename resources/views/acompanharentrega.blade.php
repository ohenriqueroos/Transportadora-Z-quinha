@extends('layout')
@section('pagina')

@foreach ($pedido as $val)
<div class="page-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
          <h5><b>Entrega:</b></h5>
          <hr>
          <p class="mb-2"><b>Código de Rastreamento:</b></p>
          <p class="mb-2">{{ $val['rastreamento'] }}</p>
          <p class="mb-2"><b>Nome do Destinatário:</b></p>
          <p class="mb-2">{{ $val['nomedestinatario'] }}</p>
          <hr>
          <a href="pedido/{{$val['rastreamento']}}" style="color: rgba(237, 32, 36)">
          Veja mais detalhes!
          </a>
        </div>
    </div>
  </div>
</div>
@endforeach


@endsection