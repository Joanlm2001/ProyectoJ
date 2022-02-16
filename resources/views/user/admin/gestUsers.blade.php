@extends('layouts.layoutAdmin')

<script type="text/javascript" src="{!! asset('js/listarUsuarios.js') !!}" defer></script>

@section('content')

<section> <!-- Título -->
    <div class="titulo-gestion">
        <h1>Gestión de usuarios</h1>
    </div>
</section>

<section>
    <div class="div-gestion-usuarios">
        <div class="container-users"></div>
        <ul>
            <li>ID:
                <ul class="id">

                </ul>
            </li>
            <li>NOMBRE:
                <ul class="nombre">

                </ul>
            </li>
            <li>DNI:
                <ul class="dni">

                </ul>
            </li>
            <li>EMAIL:
                <ul class="email">

                </ul>
            </li>
            <li>ROL:
                <ul class="rol">

                </ul>
            </li>
            <li>DIRECCIÓN DE ENTREGA:
                <ul class="direccion">

                </ul>
            </li>
        </ul>
    </div>
</section>

<section>
    <button type="button" class="boton-ver-producto">Atrás</button>
</section>

@endsection
