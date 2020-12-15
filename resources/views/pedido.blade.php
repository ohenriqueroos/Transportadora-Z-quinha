@extends('layout')
@section('pagina')


<div class="page-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="pt-5 col-lg-8">
        <div class="card-page">
          <h5><b>Dados do pedido:</b></h5>
          <hr>
          <form method="POST" action="/pedido">
          @csrf
          <p class="mb-2"><b>Nome do destinatário:</b></p>
          <input type="hidden" name="id_pedido" value="{{ $pedido['id_pedido'] }}">
          <input class="form-control" type="text" name="nomedestinatario" value="{{$pedido['nomedestinatario']}}">
          <p class="mb-2"><b>Código de Rastreamento:</b></p>
          <p class="mb-2">{{$pedido['rastreamento']}}</p>
          <p class="mb-2"><b>Telefone do destinatário:</b></p>
          <input type="hidden" name="id_pedido" value="{{ $pedido['id_pedido'] }}">
          <input class="form-control" type="text" name="telefonedestinatario" value="{{$pedido['telefonedestinatario']}}">
          <p class="mb-2"><b>Endereço do destinatário:</b></p>
          <input type="hidden" name="id_pedido" value="{{ $pedido['id_pedido'] }}">
          <input class="form-control" type="text" name="enderecodestinatario" value="{{$pedido['enderecodestinatario']}}"><br>
            <p>Ex.: Avenida das Batatas, 321 Bairro: Centro - Timbó-SC</p>
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-2">
                <button type="submit" class="btn btn-primary">Alterar</button>
              </div>
              <div class="col-2">
                <a href="/delete/{{ $pedido['id_pedido'] }}" class="btn btn-primary">Deletar</a>
              </div>
            </div>  
        </div>
    </div>
  </div>
</div>



@endsection