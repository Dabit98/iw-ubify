@extends('layouts.page')

@section('content')

    <head>
        <link rel="stylesheet" href="css/index.css">
        <title>Petición realizada</title>
    </head>

    <h2 class="texto">Ruta pedida con éxito</h2>

    <a class="boton-regcliente" href="{{ url('/home2')}}">Volver a inicio</a>

  

    </html>
@endsection