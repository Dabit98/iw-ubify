<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{ asset('css/registros.css') }}">
    <title>Vehiculo</title>
  </head>
  <body>
  <a href="{{ url('') }}"><img src="{{ asset('images/70-uber-512.png') }}" style='width:60pt; height:60pt'></a>
  <table style='width:100%;'>
    <tr>
    <th>
  <form action="{{ action('VehiculosController@store') }}" method="POST" class="form-Registro">
  @csrf
    <h1>Marca</h1>
      <p><input class="control" type="text" name="marca" id= "marca" placeholder="Marca del coche" value="{{ old ('marca') }}" style="background-color: lightgray;"/></p>
    <h1>Modelo</h1>
      <p><input class="control" type="text" name="modelo" id= "modelo" placeholder="Modelo del coche" value="{{ old ('modelo') }}" style="background-color: lightgray;"/></p>
    <h1>Plazas</h1>
      <p><input class="control" type="text" name="plazas" id= "plazas" placeholder="Número de plazas" value="{{ old ('plazas') }}" style="background-color: lightgray;"/></p>
    <h1>Minusvalido</h1>



      <p> Si<input class="control" type="checkbox" name="minusvalido" id= "minusvalido" value="{{ old ('minusvalido') }}" style="background-color: lightgray;"/></p>


      <h1>Email</h1>

      <p><input class="control" type="email" name="conductor_email" id= "conductor_email" placeholder="Introduzca el email del conductor" value="{{ old ('conductor_email') }}" style="background-color: lightgray;"/></p>

      <input class="boton" type="submit" value="Añadir">
    </form>
</th>
<th>
{{--Error messages--}}
   @if (count($errors) > 0)
    <div class="alerta-error" role="alert">
    </br>
      @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
      <br/>
    </div>
    @endif
</th>
</table>
  </body>
</html>





