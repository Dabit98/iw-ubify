<html lang="en">
  <head>
    <link rel="stylesheet" href="css/superuser.css">
    <title>Administrar</title>
</head>
@extends('layouts.page')

@section('content')
<ul>
  <div aria-labelledby="navbarDropdown">
  <a class="boton-a" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  </div>            
</ul>
  <body>
    <div style='text-align:center'> 
      <img class='imagen' src='images/70-uber-512.png'>
      <h1 class='titulo'>UBIFY</h1> 
      <button class='botones' onclick="location.href='{{ url('User') }}'">Clientes</button> <br />
      <button class='botones' onclick="location.href='{{ url('Conductores') }}'">Conductores</button> <br />
      <button class='botones' onclick="location.href='{{ url('Rutas') }}'">Rutas</button> <br />
      <button class='botones' onclick="location.href='{{ url('Vehiculos') }}'">Vehiculos</button> <br />
      <button class='botones' onclick="location.href='{{ url('Pagos') }}'">Pagos</button>
    </div>
  </body>
  </table>
  <table class="tabla-pie">
    <tr>
    <td class="td-pie"><h2 class="texto-td">UBIFY</h2></td>
    </tr>
  </table>
</html>
@endsection