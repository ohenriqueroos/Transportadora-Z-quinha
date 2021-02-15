@extends('layoutadmin')
@section('admin')
  <div class="row m-5 col-12 justify-content-center">
    <div class="card-page col-4">
      <h5><b>Cadastro de Funcionário:</b></h5>
      <hr>
      <form method="POST" action="NewAdmin" class="mt-5">
      @csrf 
        <label for="name" class="fw-medium fg-grey">Nome completo:</label>
        <input type="text" class="form-control" name="nomecompleto">
        <label for="name" class="fw-medium fg-grey">E-mail:</label>
        <input type="text" class="form-control" name="email">
        <label for="name" class="fw-medium fg-grey">Telefone:</label>
        <input type="text" class="form-control" name="telefone">
        <label for="name" class="fw-medium fg-grey">Endereço:</label>
        <input type="text" class="form-control" name="endereco">
        <label for="name" class="fw-medium fg-grey">CPF:</label>
        <input type="text" class="form-control" name="cpf">
        <label for="name" class="fw-medium fg-grey">Data de Nacimento:</label>
        <input type="date" class="form-control" name="datanascimento">
        <label for="name" class="fw-medium fg-grey">Senha:</label>
      <input type="password" class="form-control" name="senha">
      <div class="form-group mt-4 wow fadeInUp">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
      </form>
  </div>
</div>


@endsection