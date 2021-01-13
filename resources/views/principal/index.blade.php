@extends('layouts.page')

@section('content')
  <head>
   
    <title>Inicio</title>
  </head>
  
  <h2 class="titulos">¡VIAJA CON NOSOTROS!</h3>
  <table class="tabla-inicio">
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
  <!-- FALTA ENVIAR A LA PAGINA DE REGISTRO DE CLIENTES -->
  <a class="boton-regcliente" href="{{ url('/register')}}">Regístrate para viajar</a>
  

  <h2 class="titulos">¡CONDUCE CON NOSOTROS!</h3>
  <table class="tabla-inicio">
    <tr>
      <td class="td-inicio"><img src="images/Index-dinero.png" class="img-td"></img>
      <h2 class="texto-td">GANA POR DISTANCIA Y TIEMPO</h2>
      <h3 class="texto-td">Las tarifas de Ubify son justas y transparentes, calculadas a partir del tiempo y distancia de cada viaje.</h3></td>
      <td class="td-inicio"><img src="images/Index-horario.png" class="img-td"></img>
      <h2 class="texto-td">HORARIO FLEXIBLE</h2>
      <h3 class="texto-td">Trabaja cuando quieras, donde quieras.</h3></td>
      <td class="td-inicio"><img src="images/Index-comision.png" class="img-td"></img>
      <h2 class="texto-td">SIN COMISIONES</h2>
      <h3 class="texto-td">Sin riesgos. Si no ganas, no pagas.</h3></td>
    </tr>
  </table>
  <br></br>
    <!-- FALTA ENVIAR A LA PAGINA DE REGISTRO DE CONDUCTORES -->
  <a class="boton-regconductor" href="{{ url('/register')}}">Regístrate para conducir</a>
  <table class="tabla-pie">
    <tr>
    <td class="td-pie"><h2 class="texto-td">UBIFY</h2></td>
    </tr>
  </table>
@endsection
