@extends('layout')
@section('pagina')

<div class="page-hero-section bg-image hero-home-1" style="background-color: white; height: 160vh;">
  <div class="hero-caption pt-5">
    <div class="container h-100">
      <div class="row pt-5 align-items-center h-100">
      <div class="col-lg-5 py-3">
        <h1 class="wow fadeInUp">Cadastre-se</h1>

        <form method="POST" action="chamaFuncao" class="mt-5">
        @csrf    
        <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Nome Completo</label>
            <input type="text" class="form-control" name="nomecompleto">
          </div>
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">E-mail</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Telefone</label>
            <input type="text" class="form-control" name="telefone">
          </div>
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Endereço</label>
            <input type="text" class="form-control" name="endereco">
            <p>Ex.: Avenida das Batatas, 321 Bairro: Centro - Timbó-SC</p>
          </div>
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">CPF</label>
            <input type="text" class="form-control" name="cpf">
          </div>
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Data de Nascimento</label>
            <input type="date" class="form-control" name="datanascimento">
          </div>
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Senha</label>
            <input type="password" class="form-control" name="senha">
          </div>
          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>

        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow floating-animate">
            <img src="/img/cadastro.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







@endsection