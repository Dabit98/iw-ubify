<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/listados.css">
    <title>Clientes</title>
  </head>
  <body>
  <a href="{{ url('/home2') }}"><img src='images/70-uber-512.png' style='width:60pt; height:60pt'></a>
      <div style='text-align:center'>
       
      <div style='text-align:center'>
        <button class='boton' onclick="location.href='{{ url('Conductores/registro') }}'">Añadir Conductor</button>
      </div>
      <table class='tabla'>
        <tr>
          <th><a href="{{ action('ConductoresController@list', ['sort'=>'email']) }}", style="background-color:#85C1E9">Email</a></th>
          <th><a href="{{ action('ConductoresController@list', ['sort'=>'name']) }}", style="background-color:#85C1E9">Nombre</a></th>
          <th><a href="{{ action('ConductoresController@list', ['sort'=>'surname']) }}", style="background-color:#85C1E9">Apellidos</a></th>
          <th><a href="{{ action('ConductoresController@list', ['sort'=>'fecha_nac']) }}", style="background-color:#85C1E9">Fecha Nacimiento</a></th>
        </tr>
        @foreach($conductores as $conductor)
          <tr>
            <td>{{ $conductor->email }}</td>
            <td>{{ $conductor->name }}</td>
            <td>{{ $conductor->surname }}</td>
            <td>{{ $conductor->fecha_nac }}</td>
              <td><form method="post" action="{{ url('/Conductores/'.$conductor->email) }}">
              {{csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
              </form></td>
            <td> <button type="submit" onclick="location.href='{{ url('Conductores/modificar/'.$conductor->email) }}'">Modificar</button> </td>
          </tr>
        @endforeach
      </table>
      <div class="pagination center">
        @if(isset($sort))
          {{ $conductores->appends(['sort'=>$sort])->links() }}
        @else
          {{ $conductores->links() }}
        @endif
      </div>
  </body>
</html>
