<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/listados.css">
    <title>Clientes</title>
  </head>
  <body>
  <a href="{{ url('/home2') }}"><img src='images/70-uber-512.png' style='width:60pt; height:60pt'></a>
      <div style='text-align:center'>
        <form action="/searchNombre" method ="get">
          <div class ="input-group">
            <h3>Nombre</h3>
            <input type="search" name="name" class="barra_busqueda">
            <span class="input-group-prepend">
              <button class="boton_pequeño" type="submit">Buscar</button>
            </span>
          </div>
        </form>
        <form action="/searchApellidos" method ="get">
          <div class ="input-group">
            <h3>Apellidos</h3>
            <input type="search" name="surname" class="barra_busqueda">
            <span class="input-group-prepend">
              <button type="submit" class="boton_pequeño">Buscar</button>
            </span>
          </div>
        </form>
      </div>
      <div style='text-align:center'>
        <button class='boton' onclick="location.href='{{ url('User/registro') }}'">Añadir Cliente</button>
      </div>
      <table class='tabla'>
        <tr>
          <th><a href="{{ action('UserController@list', ['sort'=>'email']) }}", style="background-color:#85C1E9">Email</a></th>
          <th><a href="{{ action('UserController@list', ['sort'=>'name']) }}", style="background-color:#85C1E9">Nombre</a></th>
          <th><a href="{{ action('UserController@list', ['sort'=>'surname']) }}", style="background-color:#85C1E9">Apellidos</a></th>
          <th><a href="{{ action('UserController@list', ['sort'=>'fecha_nac']) }}", style="background-color:#85C1E9">Fecha Nacimiento</a></th>
        </tr>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->email }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->fecha_nac }}</td>
              <td><form method="post" action="{{ url('/User/'.$user->email) }}">
              {{csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
              </form></td>
            <td> <button type="submit" onclick="location.href='{{ url('User/modificar/'.$user->email) }}'">Modificar</button> </td>
          </tr>
        @endforeach
      </table>
      <div class="pagination center">
        @if(isset($sort))
          {{ $users->appends(['sort'=>$sort])->links() }}
        @else
          {{ $users->links() }}
        @endif
      </div>
  </body>
</html>
