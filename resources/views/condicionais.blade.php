@extends ('layout')
@section ('pagina')

<h4>CONDICIONAIS</h4>

<h5>Ternária</h5>
@php
$i = 10;
echo ($i >=7) ? "Verdadeiro" : "Falso!";
@endphp

<h5>Coalesce</h5>
@php
$cliente = $_GET['id'] ?? 1;
@endphp

<h5>While</h5>
@php
$i = 1;
while ($i <= 10) {
    echo $i++;
}
@endphp

<h5>For</h5>
@php
for ($i = 0; $i < 10; $i++) {
  echo $i;
}
@endphp
@endsection