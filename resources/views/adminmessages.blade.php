@extends('layoutadmin')
@section('admin')

@foreach ($messages as $val)
<div class="page-section">
  <div class="container">
    <div class="pl-5 col-lg-12">
      <div class="row mb-5 justify-content-center">
        <div class="card-page pr-8">
          <h5><b>Mensagem:</b></h5>
          <hr>
          <p class="mb-2"><b>Nome Completo:</b></p>
          <p class="mb-2">{{ $val['namemessages'] }}</p>
          <p class="mb-2"><b>E-mail:</b></p>
          <p class="mb-2">{{ $val['emailmessages'] }}</p>
          <p class="mb-2"><b>Mensagem:</b></p>
          <p class="mb-2">{{ $val['textmessages'] }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection