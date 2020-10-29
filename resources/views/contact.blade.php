@extends('layout')
@section('pagina')
<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(/img/capa.jpg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Contato</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contato</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 my-3 wow fadeInUp">
          <div class="card-page2">
            <div class="row row-beam-md">
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-location-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Localização</p>
                <p class="mb-0">Av. Batatas, 123 Bairro das Batatas<br> Cidade das Batatas<br> Santa Catarina - Brasil</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-call-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Contato</p>
                <p class="mb-1">0800 400 28922</p>
                <p class="mb-0">4002-8922</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-mail-open-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">E-mail</p>
                <p class="mb-1">atendimento@zequinhatransportadora.com.br</p>
                <p class="mb-0">contato@zequinhatransportadora.com.br</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 my-3 wow fadeInUp">
          <div class="card-page">
            <h3 class="fw-normal">Fale Conosco!</h3>
            <form method="POST" class="mt-3">
              <div class="form-group">
                <label for="name" class="fw-medium fg-grey">Nome Completo</label>
                <input type="text" class="form-control" id="name">
              </div>
    
              <div class="form-group">
                <label for="email" class="fw-medium fg-grey">E-mail</label>
                <input type="text" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="phone" class="fw-medium fg-grey">Telefone</label>
                <input type="text" class="form-control" id="phone">
              </div>
    
              <div class="form-group">
                <label for="message" class="fw-medium fg-grey">Mensagem</label>
                <textarea rows="6" class="form-control" id="message"></textarea>
              </div>
    
              <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Enviar mensagem</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><br>

</div> <!-- .bg-light -->
@endsection