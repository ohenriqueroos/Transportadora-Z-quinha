@extends('layoutadmin')
@section('admin')

<div class="row col-12 m-3 justify-content-center">
    @foreach ($users as $val)
        <div class="col-3 m-1">
            <div class="card-page">
                <h5><b>Cliente:</b></h5>
                <hr>
                <p class="mb-2"><b>Nome Completo:</b></p>
                <p class="mb-2">{{ $val['nomecompleto'] }}</p>
                <p class="mb-2"><b>E-mail:</b></p>
                <p class="mb-2">{{ $val['email'] }}</p>
            </div>
        </div>
    @endforeach
</div>

@endsection