@extends('layoutadmin')
@section('admin')

<div class="page-section">
  <div class="container">
    <div class="row ml-5 justify-content-center">
      <div class="card-page pr-8">
        <h5><b>Dados do pedido:</b></h5>
        <hr>
        <form method="POST" action="/adminpedido">
        @csrf
        <input type="hidden" name="id_pedido" value="{{ $pedido['id_pedido'] }}">
        <p class="mb-2"><b>Status da Entrega:</b></p>
        <select class="mb-2" name="status">
          <option {{ ($pedido['status'] == 0) ? 'selected' : '' }} value="0">Aguardando veículo sair para coleta</option>
          <option {{ ($pedido['status'] == 1) ? 'selected' : '' }} value="1">Veículo saiu para coleta</option>
          <option {{ ($pedido['status'] == 2) ? 'selected' : '' }} value="2">Coletado</option>
          <option {{ ($pedido['status'] == 3) ? 'selected' : '' }} value="3">Remetente não localizado</option>
          <option {{ ($pedido['status'] == 4) ? 'selected' : '' }} value="4">Pedido a caminho da Central de Distribuição</option>
          <option {{ ($pedido['status'] == 5) ? 'selected' : '' }} value="5">Pedido chegou na Central de Distribuição</option>
          <option {{ ($pedido['status'] == 6) ? 'selected' : '' }} value="6">Pedido saiu para entrega</option>
          <option {{ ($pedido['status'] == 7) ? 'selected' : '' }} value="7">Pedido Entregue</option>
          <option {{ ($pedido['status'] == 8) ? 'selected' : '' }} value="8">Destinatário não localizado</option>
        </select>
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
        <div class="col-2">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
