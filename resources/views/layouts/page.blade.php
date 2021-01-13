<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css">
</head>

@guest
    <nav>
        <a href="{{ url('/') }}" class="nav-boton">Inicio</a>
        <a href="{{ url('Login') }}" class="nav-boton">Login</a>
        <a href="{{ url('Info_proyecto') }}" class="nav-boton">Info. proyecto</a>
        <a href="{{ url('Contactanos') }}" class="nav-boton">Contáctanos</a>
    </nav>
@else
    @admin
    <nav>
        <a href="{{ url('/home2') }}" class="nav-boton">Inicio</a>
        <a href="{{ url('Superuser') }}" class="nav-boton">Administrar</a>
        <a href="{{ url('Info_proyecto') }}" class="nav-boton">Info. proyecto</a>
        <a href="{{ url('Contactanos') }}" class="nav-boton">Contáctanos</a>
    </nav>
    @else  
    <nav>
        <a href="{{ url('/home2') }}" class="nav-boton">Inicio</a>
        <a href="{{ url('/edit/user/') }}" class="nav-boton">Editar perfil</a>
        <a href="{{ url('Info_proyecto') }}" class="nav-boton">Info. proyecto</a>
        <a href="{{ url('Contactanos') }}" class="nav-boton">Contáctanos</a>
    </nav>
    @endadmin
@endguest

    <main class="py-4">
        @yield('content')
    </main>

</html>
