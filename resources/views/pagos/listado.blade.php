<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/listados.css">
    <title>Pagos</title>
  </head>
  <body>
  <a href="{{ url('/home2') }}"><img src='images/70-uber-512.png' style='width:60pt; height:60pt'></a>
      <div style='text-align:center'>
      </div>
      <table class='tabla'>
        <tr>
          <th><a href="{{ action('PagosController@list', ['sort'=>'id']) }}", style="background-color:#85C1E9">ID</a></th>
          <th><a href="{{ action('PagosController@list', ['sort'=>'titular']) }}", style="background-color:#85C1E9">Titular</a></th>
          <th><a href="{{ action('PagosController@list', ['sort'=>'fechacad']) }}", style="background-color:#85C1E9">Fecha Caducidad</a></th>
          <th><a href="{{ action('PagosController@list', ['sort'=>'cvc']) }}", style="background-color:#85C1E9">CVC</a></th>
          <th><a href="{{ action('PagosController@list', ['sort'=>'numTarjeta']) }}", style="background-color:#85C1E9">Num. Tarjeta</a></th>
          <th><a href="{{ action('PagosController@list', ['sort'=>'cliente_email']) }}", style="background-color:#85C1E9">Email Cliente</a></th>
        </tr>
        @foreach($pagos as $pago)
          <tr>
            <td>{{ $pago->id }}</a></td>
            <td>{{ $pago->titular }}</td>
            <td>{{ $pago->fechacad }}</td>
            <td>{{ $pago->cvc }}</td>
            <td>{{ $pago->numTarjeta }}</td>
            <td>{{ $pago->cliente_email }}</td>
            <td><form method="post" action="{{ url('/Pagos/'.$pago->id) }}">
              {{csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
              </form></td>
          </tr>
        @endforeach
      </table>
      <div class="pagination center">
        @if(isset($sort))
          {{ $pagos->appends(['sort'=>$sort])->links() }}
        @else
          {{ $pagos->links() }}
        @endif
      </div>
  </body>
</html>
