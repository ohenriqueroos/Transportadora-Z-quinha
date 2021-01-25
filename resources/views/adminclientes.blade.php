@extends('layoutadmin')
@section('admin')

@foreach ($users as $val)
<div class="page-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="pl-5 col">
                <div class="card-page pr-8">
                    <h5><b>Cliente:</b></h5>
                    <hr>
                    <p class="mb-2"><b>Nome Completo:</b></p>
                    <p class="mb-2">{{ $val['nomecompleto'] }}</p>
                    <hr>
                    <a href="" style="color: rgba(237, 32, 36)">
                    Veja mais detalhes!
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection