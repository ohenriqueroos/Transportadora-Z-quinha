@extends('layout')
@section('pagina')

<div class="page-hero-section bg-image hero-home-1" style="background-color: white">
  <div class="hero-caption pt-5">
    <div class="container h-100">
      <div class="row align-items-center h-100">
      <div class="col-lg-5 py-3">
        <h1 class="wow fadeInUp">Fazer Pedido</h1>

        <form method="POST" action="novoPedido" class="mt-5">
        @csrf    
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Nome completo do Destinatário</label>
            <input type="text" class="form-control" name="nomedestinatario">
          </div>
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Telefone do Destinatário</label>
            <input type="text" class="form-control" name="telefonedestinatario">
          </div>
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Endereço Destinatário</label>
            <input type="text" class="form-control" name="enderecodestinatario">
            <p>Ex.: Avenida das Batatas, 321 Bairro: Centro - Timbó-SC</p>
          </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Enviar Pedido</button>
          </div>
        </form>
      </div>
        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow floating-animate">
            <img src="/img/imgpedido.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection