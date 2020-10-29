@extends('layout')
@section('pagina')
<main class="bg-light">

<div class="page-hero-section bg-image hero-mini" style="background-image: url(/img/capa.jpg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-lg-6">
          <h3 class="mb-4 fw-medium">Sobre</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
              <li class="breadcrumb-item active" aria-current="page">Início</li>
              <li class="breadcrumb-item active" aria-current="page">Sobre</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section pt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-page">
          <h3>Nós somos a Zéquinha Transportadora!</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est</p>
          <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="card-page mt-3">
          <h5>Sócios!</h5>
          <hr>

          <div class="row justify-content-center">
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="/img/person/potato.jpg" alt="">
                </div>
                <h5 class="team-name">Batata Potato</h5>
                <span class="fg-gray fs-small">CEO e Fundador</span>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="/img/person/potato_fonseca.jpg" alt="">
                </div>
                <h5 class="team-name">Bataton Fonseca</h5>
                <span class="fg-gray fs-small">Sócio</span>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="/img/person/paula.jpg" alt="">
                </div>
                <h5 class="team-name">Paula Tejano</h5>
                <span class="fg-gray fs-small">Sócia</span>
              </div>
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>

</main> <!-- .bg-light -->

@endsection