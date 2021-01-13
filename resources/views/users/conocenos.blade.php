@extends('layouts.page')

@section('content')
  <head>
    <link rel="stylesheet" href="css/conocenos.css">
    <title>Conócenos</title>
  </head>
  <h1 class="txt-titulo">UBIFY</h1>
  <img class="img-titulo" src="images/70-uber-512.png"></img>
  <h2 class="txt-subtitulo">Ubify es una empresa de transporte.</h2>
  <table class="tabla-info">
    <tr><td class="td-texto"><h3 class="texto-td">Nacido de un proyecto de clase, esta idea permite el transporte entre
      zonas de Alicante manteniendo un precio fijo de desplazamiento.</h3>
      <h3 class="texto-td"> Diviendo Alicante en
      4 zonas, nuestros conductores facilitarán el transporte de los usuarios por todo el municipio.
      Incluyendo las zonas San Vicente del Raspeig, Mutxamiel y San Juan.</h3></td></tr>
      <tr><td class="td-img-info"><img class="img-td" src="images/zonas.png"></td></tr>
      <tr><td class="td-texto"><h3 class="texto-td">Tanto conductores como usuarios se pueden registrar de manera gratuita. Si eres conductores
      puedes registrar tus vehiculos con los que vas a trabajar y dar servicio. Mientras que si eres
      cliente, podrás seleccionar a la zona que quieres viajar.</h3>
      <h3 class="texto-td">Podrás elegir si necesitas un vehículo de minusválidos, o en caso de ser conductor señalar que posees
      uno para dar servicio con él.</h3></td></tr>
  </table>
  <table class="tabla-pie">
    <tr>
    <td class="td-pie"><h2 class="texto-td">UBIFY</h2></td>
    </tr>
  </table>
</html>
@endsection