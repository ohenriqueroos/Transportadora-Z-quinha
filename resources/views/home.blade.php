@extends('layout')
@section('pagina')

<!--
@foreach ($users as $val)
  Nome: <b>{{ $val['nomecompleto'] }}</b><br>
  Id: <b>{{ $val['id_users'] }}</b><br>
@endforeach -->

<div class="page-hero-section bg-image hero-home-1" style="background-color: white">
  <div class="hero-caption pt-5">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 wow fadeInUp">
          <div class="badge mb-2">#1 Melhor transportadora de 2020</div>
          <h1 class="mb-4">Faça seu pedido totalmente online!</h1>
          <p class="mb-4">Solicite nosso serviço de transporte sem sair de casa.<br>
            Nós buscamos na sua casa, escritório ou empresa.</p>
          <a href="cadastro" class="btn btn-primary rounded-pill">Cadastre-se</a>
        </div>
        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow floating-animate">
            <img src="/img/pedindodecasa.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Clients -->
<div class="page-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="/img/clients/mueller.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="/img/clients/copytim.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="/img/clients/persysten.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="/img/clients/bestbuy.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div> <!-- End clients -->

<div class="position-realive bg-image" style="background-image: url(/img/pattern_1.svg);">

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 py-3">
        <div class="img-place mobile-preview shadow wow zoomIn">
          <img src="/img/entregador.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-6 py-3 mt-lg-5">
        <div class="iconic-list">
          <div class="iconic-item wow fadeInUp">
            <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
              <span class="mai-cube"></span>
            </div>
            <div class="iconic-content">
              <h5>Entregamos mercadorias de até 120kg!</h5>
              <p class="fs-small">Realizamos entregas em Santa Catarina com peso de até 120kg.</p>
            </div>
          </div>
          <div class="iconic-item wow fadeInUp">
            <div class="iconic-md iconic-text bg-info fg-white rounded-circle">
              <span class="mai-shield"></span>
            </div>
            <div class="iconic-content">
              <h5>Segurança na entrega!</h5>
              <p class="fs-small">Com a Zéquinha Transportadora sua mercadoria conta com um seguro, caso seja furtada ou estraviada.</p>
            </div>
          </div>
          <div class="iconic-item wow fadeInUp">
            <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
              <span class="mai-desktop-outline"></span>
            </div>
            <div class="iconic-content">
              <h5>Rastreamento direto no nosso site!</h5>
              <p class="fs-small">Você pode acompanhar a entrega da sua mercadoria direto pelo nosso site! Rápido, fácil e sem sair de casa!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="page-section bg-dark fg-white">
  <div class="container">
    <h1 class="text-center">4 motivos para você nos escolher!</h1>

    <div class="row justify-content-center mt-5">
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn">
          <div class="mb-3">
            <img src="/img/icons/rocket.svg" width="100" alt="">
          </div>
          <p class="fs-large">Entregas rápidas</p>
          <p class="fs-small fg-grey">Mais rápido que o Flash. As entregas são feitas em até 2 dias úteis!</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="200ms">
          <div class="mb-3">
            <img src="/img/icons/testimony.svg" width="100" alt="">
          </div>
          <p class="fs-large">100% de Satisfação</p>
          <p class="fs-small fg-grey">Aqui não tem arrependimento. Todos os nossos clientes saem satisfeitos.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="600ms">
          <div class="mb-3">
            <img src="/img/icons/coins.svg" width="100" alt="">
          </div>
          <p class="fs-large">Melhor preço</p>
          <p class="fs-small fg-grey">Transporte de mercadoria deve ser caro ne? Na Zéquinha Transportadora não. Temos o melhor preço do Brasil.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="800ms">
          <div class="mb-3">
            <img src="/img/icons/support.svg" width="100" alt="">
          </div>
          <p class="fs-large">Suporte 24 horas</p>
          <p class="fs-small fg-grey">Meia noite e bateu aquela dúvida? Não tem problema, nosso suporte funciona 24h<br> por dia.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section bg-image" style="background-image: url(/img/pattern_2.svg);">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-5 mb-5 mb-lg-0 wow fadeInUp">
        <h1 class="mb-4">Nossos preços são de outro mundo!</h1>
        <p class="mb-5">O melhor preço da Região! Solicite sua entrega hoje. Além da entrega você conta com seguro incluso no preço final. Com a Zéquinha Transportadora você pode ficar tranquilão.</p>
      </div>
      <div class="col-lg-7">
        <div class="pricing-table">
          <div class="pricing-item active wow zoomIn">
            <div class="pricing-header">
              <h5>Preço até</h5>
              <h1 class="fw-normal">R$50,00</h1>
            </div>
            <div class="pricing-body">
              <ul class="theme-list">
                <li class="list-item">Para pacotes de até 50kg</li>
                <li class="list-item">Caixa Grátis</li>
                <li class="list-item">Plástico Bolha Grátis</li>
                <li class="list-item">Entrega Somente em SC</li>
                <li class="list-item">Suporte 24 horas</li>
              </ul>
            </div>
          </div>
          <div class="pricing-item wow zoomIn" data-wow-delay="200ms">
            <div class="pricing-header">
              <h5>Preço até</h5>
              <h1 class="fw-normal">R$150,00</h1>
            </div>
            <div class="pricing-body">
              <ul class="theme-list">
                <li class="list-item">Para pacotes de até 120kg</li>
                <li class="list-item">Caixa Grátis</li>
                <li class="list-item">Plástico Bolha R$2,00 por m²</li>
                <li class="list-item">Entrega Somente em SC</li>
                <li class="list-item">Suporte 24 horas</li>
              </ul>
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="p-5 page-section bg-image bg-image-overlay-dark" style="background-image: url(/img/caminhoes.jpg);">
  <div class="container fg-white">
    <div class="row">
      <div class="col-md-8 col-lg-6 offset-lg-1 wow fadeInUp">
        <h2 class="mb-5 fg-white fw-normal">Conheça mais sobre a gente!</h2>
        <p class="fs-large font-italic">Fundamos a empresa em 2020 com o intuito de inovar no ramo de logística. Somos uma empresa jovem, mas muito competente, clique no link abaixo e nos conheça melhor.</p>
        <p class="fs-large fg-grey fw-medium mb-5">Senhor Batata Potato, CEO e Fundador da<br> Zéquinha Transportadora.</p>

        <a href="sobre" class="btn btn-outline-light rounded-pill">Sobre nós! <span class="mai-chevron-forward"></span></a>
      </div>
    </div>
  </div>
</div><br>

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 py-3 mb-5 mb-lg-0">
        <div class="img-place w-lg-75 wow zoomIn">
          <img src="/img/illustration_contact.svg" alt="">
        </div>
      </div>
      <div class="col-lg-5 py-3">
        <h1 class="wow fadeInUp">Tem alguma dúvida?</h1>

        <form method="POST" class="mt-5">
        @csrf    
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Nome completo</label>
            <input type="text" class="form-control" id="name">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">E-mail</label>
            <input type="text" class="form-control" id="email">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Mensagem</label>
            <textarea rows="6" class="form-control" id="message"></textarea>
          </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Enviar mensagem</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection