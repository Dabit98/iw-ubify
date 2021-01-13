<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{ asset('css/registros.css') }}">
    <title>Registrarse</title>
  </head>
  <body>
  <a href="{{ url('') }}"><img src="{{ asset('images/70-uber-512.png') }}" style='width:60pt; height:60pt'></a>
  <table style='width:100%;'>
    <tr>
    <th>
  <form action="{{ action('UserController@store') }}" method="POST" class="form-Registro">
  @csrf
    <h1>Nombre</h1>
      <p><input class="control" type="text" name="name" id= "name" placeholder="Introduzca el nombre" value="{{ old ('name') }}" style="background-color: lightgray;"/></p>
    <h1>Apellidos</h1>
      <p><input class="control" type="text" name="surname" id= "surname" placeholder="Introduzca los apellidos" value="{{ old ('surname') }}" style="background-color: lightgray;"/></p>
    <h1>Email</h1>
      <p><input class="control" type="email" name="email" id= "email" placeholder="Introduzca el email" value="{{ old ('email') }}" style="background-color: lightgray;"/></p>
    <h1>Contraseña</h1>
      <p><input class="control" type="password" name="password" id= "password" placeholder="Introduzca la contraseña" value="{{ old ('password') }}" style="background-color: lightgray;"/></p>
    <h1>Fecha</h1>
      <p><input class="control" type="date" name="fecha_nac" id="fecha_nac" value="{{ old ('fecha_nac') }}" style="background-color: lightgray;"/></p>
      <input class="boton" type="submit" value="Registrar">
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





