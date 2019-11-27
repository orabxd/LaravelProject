
@extends('layouts.app')

@section('content')
    @include('layouts.headers.head_aux')
    <!-- Tarjeta de articulos!-->

    <nav class="navbar navbar-light bg-gradient-lighter">
        <a class="navbar-brand"> Añadir</a>
    </nav>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Negocio
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
     <!--       <div class="dropdown-divider"></div>  !-->
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
@endsection
