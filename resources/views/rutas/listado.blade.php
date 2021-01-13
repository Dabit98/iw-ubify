<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/listados.css">
    <title>Rutas</title>
  </head>
  <body>
  <a href="{{ url('/home2') }}"><img src='images/70-uber-512.png' style='width:60pt; height:60pt'></a>
      <div style='text-align:center'>
      </div>
      <table class='tabla'>
        <tr>
          <th><a href="{{ action('RutasController@list', ['sort'=>'id']) }}", style="background-color:#85C1E9">ID</a></th>
          <th><a href="{{ action('RutasController@list', ['sort'=>'origen']) }}", style="background-color:#85C1E9">Origen</a></th>
          <th><a href="{{ action('RutasController@list', ['sort'=>'detino']) }}", style="background-color:#85C1E9">Destino</a></th>
          <th><a href="{{ action('RutasController@list', ['sort'=>'precio']) }}", style="background-color:#85C1E9">Precio</a></th>
          <th><a href="{{ action('RutasController@list', ['sort'=>'estado']) }}", style="background-color:#85C1E9">Estado</a></th>
        </tr>
        @foreach($rutas as $ruta)
          <tr>
            <td>{{ $ruta->id }}</td>
            <td>{{ $ruta->origen }}</td>
            <td>{{ $ruta->destino }}</td>
            <td>{{ $ruta->precio }}</td>
            <td>{{ $ruta->estado }}</td>
            <td><form method="post" action="{{ url('/Rutas/'.$ruta->id) }}">
              {{csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
              </form></td>
          </tr>
        @endforeach
      </table> 
      <div class="pagination center">
        @if(isset($sort))
          {{ $rutas->appends(['sort'=>$sort])->links() }}
        @else
          {{ $rutas->links() }}
        @endif
      </div>
</body>
</html>
