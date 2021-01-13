@extends('layouts.page')

@section('content')

    <head>
        <link rel="stylesheet" href="css/index.css">
        <title>Transacción</title>
    </head>

    <h2 class="texto">Selecciona la zona origen:

    <select name="zonas_origen" id="zonas_origen">
        <option value=1>Zona A</option>
        <option value=2>Zona B</option>
        <option value=3>Zona C</option>
        <option value=4>Zona D</option>
    </select>

    </h2>

    <h2 class="texto">Selecciona la zona destino:

    <select name="zonas_destino" id="zonas_destino">
        <option value=1>Zona A</option>
        <option value=2>Zona B</option>
        <option value=3>Zona C</option>
        <option value=4>Zona D</option>
    </select></h2>
    </br>

    <h3>Precio: 6'80 € </h3>

    <a class="boton-regcliente" href="{{ url('/exito')}}">Comprar</a>

  

    </html>
@endsection