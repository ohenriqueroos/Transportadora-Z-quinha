@extends('layout')
@section('pagina')

<div class="page-hero-section bg-image hero-home-1" style="background-color: white">
  <div class="hero-caption pt-5">
    <div class="container h-100">
      <div class="row align-items-center h-100">

          <div class="col-12 col-md-5  py-3">
            <h1 class="wow fadeInUp">Login</h1>

            <form method="POST" action="checkLogin" class="mt-5">
            @csrf    
              <div class="form-group wow fadeInUp">
                <label for="name" class="fw-medium fg-grey">E-mail</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group wow fadeInUp">
                <label for="name" class="fw-medium fg-grey">Senha</label>
                <input type="password" class="form-control" name="senha">
              </div>
              <div class="form-group wow fadeInUp">
              <ul class="menu-link">
                <li><a href="cadastro">Cadastre-se</a></li>
              </ul>
              </div>
              <div class="form-group mt-4 wow fadeInUp">
                <button type="submit" class="btn btn-primary">Fazer Login</button>
              </div>
              </form>
          </div>

          <div class="col-12 col-md-7  d-none d-lg-block wow zoomIn">
            <div class="img-place mobile-preview shadow floating-animate">
              <img src="/img/login.jpg" alt="">
            </div>
          </div>

      </div>
    </div>
  </div>
</div>

@endsection


