@extends('layouts.page')

@section('content')
  <head>
    <link rel="stylesheet" href="css/index.css">
    <title>Inicio</title>
  </head>

  @driver

  <h2 class="titulos">¡CONDUCE CON NOSOTROS!</h3>
  
  </br></br>
  
  <table class="tabla-inicio">
    <tr>
      <td class="td-inicio"><img src="images/Index-tarifas.png" class="img-td"></img>
      <h2 class="texto-td">GANA DINERO CON NOSOTROS</h2>
      <h3 class="texto-td">Gana dinero de forma rápida y sencilla.</h3> </td>
      <td class="td-inicio"><img src="images/Index-soporte.png" class="img-td"></img>
      <h2 class="texto-td">SOPORTE 24/7</h2>
      <h3 class="texto-td">Estamos listos para atenderte las 24 horas del día para resolver tus dudas y necesidades.</h2></td>
      <td class="td-inicio"><img src="images/Index-facil.png" class="img-td"></img>
      <h2 class="texto-td">FÁCIL DE USAR</h2>
      <h3 class="texto-td">Selecciona un trayecto al instante para realizarlo.</h3></td>
    </tr>
  </table>
  <br></br>

  <button class='botonviajar' onclick="location.href='{{ url('Vehiculos/registro') }}'">Añadir vehiculo</button> <br />

  @else

  <h2 class="titulos">¡VIAJA CON NOSOTROS!</h3>
  
  </br></br>

  <table class="tabla-inicio">
    <tr>
      <td class="td-inicio"><img src="images/Index-tarifas.png" class="img-td"></img>
      <h2 class="texto-td">TARIFAS COMPETITIVAS Y TRANSPARENTES</h2>
      <h3 class="texto-td">Disfruta de las mejores tarifas, que además te mostraremos antes de aceptar el viaje, para que tú decidas como moverte.</h3> </td>
      <td class="td-inicio"><img src="images/Index-soporte.png" class="img-td"></img>
      <h2 class="texto-td">SOPORTE 24/7</h2>
      <h3 class="texto-td">Estamos listos para atenderte las 24 horas del día para resolver tus dudas y necesidades.</h2></td>
      <td class="td-inicio"><img src="images/Index-facil.png" class="img-td"></img>
      <h2 class="texto-td">FÁCIL DE USAR</h2>
      <h3 class="texto-td">Viaja donde quieras de la manera más rápida.</h3></td>
    </tr>
  </table>
  <br></br>

  <button class='botonviajar' onclick="location.href='{{ url('transaccion') }}'">Viaja con nosotros</button> <br />

  @enddriver

      
  

</html>
@endsection
