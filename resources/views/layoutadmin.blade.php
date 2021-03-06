<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Painel Administrativo</title>

  <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

  <link rel="stylesheet" href="/css/maicons.css">

  <link rel="stylesheet" href="/vendor/animate/animate.css">

  <link rel="stylesheet" href="/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="/css/bootstrap.css">

  <link rel="stylesheet" href="/css/mobster.css">

</head>

<body style="background-color: #d3d3d3;">

<!-- Menu Topo -->
<div class="mb-5">
  <nav class="pt-2 navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: black;">
    <img class="pl-5 mb-2" src="/img/zequinhalogohorizontalbranco.png" width="200px">
    <ul class="mr-5  navbar-nav px-3">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Session::get('users')->nomecompleto }}</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout">Sair</a>
        </div>
      </li>
    </ul>
  </nav>
</div>

<!-- Menu lateral -->
<nav class="pt-5 col-md-2 d-none d-md-block bg-light sidebar left-navbar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="/admin">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
        Pedidos
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/adminclientes">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        Clientes
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/adminmessages">
        <img src="/img/messages.svg" width="12%">
        Mensagens
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admincadastro">
        <img src="/img/new.svg" width="12%">
        Novo Funcionário
        </a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row page-index">

    @yield('admin')

  </div>
</div>

<script src="/js/jquery-3.5.1.min.js"></script>

<script src="/js/bootstrap.bundle.min.js"></script>

<script src="/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="/vendor/wow/wow.min.js"></script>

<script src="/js/mobster.js"></script> 

</body>
</html>


