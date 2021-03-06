@extends('layoutadmin')
@section('admin')

@foreach ($pedido as $val)
<div class="page-section-admin">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="pl-5 offset-1 col-sm col-md col-lg">
        <div class="card-page pr-8">
          <h5><b>Entrega {{ $val['id_pedido'] }}:</b></h5>
          <hr>
          <p class="mb-2"><b>Código de Rastreamento:</b></p>
          <p class="mb-2">{{ $val['rastreamento'] }}</p>
          <p class="mb-2"><b>Nome do Destinatário:</b></p>
          <p class="mb-2">{{ $val['nomedestinatario'] }}</p>
          <hr>
          <a href="adminpedido/{{$val['rastreamento']}}" style="color: rgba(237, 32, 36)">
          Veja mais detalhes!
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection