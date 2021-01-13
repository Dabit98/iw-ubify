@extends('layouts.page')

@section('content')
  <head>
    <link rel="stylesheet" href="css/contactanos.css">
    <title>Contáctanos</title>
  </head>
  <img src="images/Contactanos-portada.jpeg" class="imagen-portada"></img>
  <h3 class="subtitulo">Contáctanos</h3>
  <table class="tabla-info">
    <tr>
      <td class="td-contacto"><img src="images/Contactanos-movil.png" class="img-td"></img>
      <h3 class="texto-td">Nuestro servicio telefónico esta disponible: </h3>
      <h3 class="texto-td">Lunes a Viernes de 10:00h a 19:00h</h3>
      <h2 class="texto-td">900-XXX-XXX</h2></td>
      <td class="td-contacto"><img src="images/Contactanos-email.png" class="img-td"></img>
      <h3 class="texto-td">Envíanos un email en cualquier momento: </h3>
      <h2 class="texto-td">ubify-transport@service.com</h2>
      <h3 class="texto-td">Te responderemos lo antes posible</h3></td>
      <td class="td-contacto"><img src="images/Contactanos-redes.png" class="img-td"></img>
      <h3 class="texto-td">Síguenos en nuestras redes sociales como: </h3>
      <h3 class="texto-td">Twitter, Instagram y Facebook</h3>
      <h2 class="texto-td">@ubify_</h2></td>
    </tr>
  </table>
  <table class="tabla-info">
  <tr>
    <td class="td-ubicacion"><h3 class="texto-td">También puedes venir a nuestras oficinas, resolveremos tus dudas</h3></td>
    <td class="td-ubicacion"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1563.6805729228179!2d-0.5133749517957802!3d38.38689797148694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6236ba2a07b50f%3A0x161c6e192605005b!2sEdificio%2016%20-%20Escuela%20Politecnica%20Superior%201%2C%2003690%20San%20Vicente%20del%20Raspeig%2C%20Alicante!5e0!3m2!1ses!2ses!4v1589469402499!5m2!1ses!2ses" width="100%" height="200%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
  </tr>
  </table>
  <table class="tabla-pie">
    <tr>
    <td class="td-pie"><h2 class="texto-td">UBIFY</h2></td>
    </tr>
  </table>
</html>
@endsection