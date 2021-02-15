@extends('layoutadmin')
@section('admin')

@foreach ($pedidos as $val)
<div class="page-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="pl-5 col">
                <div class="card-page pr-8">
                    <h5><b>Cliente:</b></h5>
                    <hr>
                    <form method="POST" action="StatusEntrega">
                    @csrf
                    <p class="mb-2"><b>Nome Destinatário:</b></p>
                    <p class="mb-2">{{ $val['nomecompleto'] }}</p>
                    <p class="mb-2"><b>Data da Entrega:</b></p>
                    <input type="hidden" name="id_pedido" value="{{ $pedido['id_pedido'] }}">
                    <input class="form-control" type="text" name="nomedestinatario" value="{{$pedido['nomedestinatario']}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection