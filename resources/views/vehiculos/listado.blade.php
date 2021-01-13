<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/listados.css">
    <title>Vehiculos</title>
  </head>
  <body>
  <a href="{{ url('/home2') }}"><img src='images/70-uber-512.png' style='width:60pt; height:60pt'></a>
      <div style='text-align:center'>
        <button class='boton' onclick="location.href='{{ url('Vehiculos/registro') }}'">Añadir Vehiculo</button>

      </div>
      <table class='tabla'>
        <tr>
          <th><a href="{{ action('VehiculosController@list', ['sort'=>'codigo']) }}", style="background-color:#85C1E9">Codigo</a></th>
          <th><a href="{{ action('VehiculosController@list', ['sort'=>'marca']) }}", style="background-color:#85C1E9">Marca</a></th>
          <th><a href="{{ action('VehiculosController@list', ['sort'=>'modelo']) }}", style="background-color:#85C1E9">Modelo</a></th>
          <th><a href="{{ action('VehiculosController@list', ['sort'=>'plazas']) }}", style="background-color:#85C1E9">Plazas</a></th>
          <th><a href="{{ action('VehiculosController@list', ['sort'=>'minusvalido']) }}", style="background-color:#85C1E9">Minusvalido</a></th>
          <th><a href="{{ action('VehiculosController@list', ['sort'=>'conductor_email']) }}", style="background-color:#85C1E9">Conductor</a></th>
        </tr>
        @foreach($vehiculos as $vehiculo)
          <tr>
            <td>{{ $vehiculo->codigo }}</td>
            <td>{{ $vehiculo->marca }}</td>
            <td>{{ $vehiculo->modelo }}</td>
            <td>{{ $vehiculo->plazas }}</td>
            <td>{{ $vehiculo->minusvalido }}</td>
            <td>{{ $vehiculo->conductor_email }}</td>
            <td><form method="post" action="{{ url('/Vehiculos/'.$vehiculo->codigo) }}">
              {{csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
              </form></td>
	 <td> <button type="submit" onclick="location.href='{{ url('Vehiculos/modificar/'.$vehiculo->codigo) }}'">Modificar</button> </td>
          </tr>
        @endforeach
      </table> 
      <div class="pagination center">
        @if(isset($sort))
          {{ $vehiculos->appends(['sort'=>$sort])->links() }}
        @else
          {{ $vehiculos->links() }}
        @endif
      </div>
</body>
</html>
