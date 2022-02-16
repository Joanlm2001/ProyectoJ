@extends('layouts.layoutAdmin')

<script type="text/javascript" src="{!! asset('js/editarProductos.js') !!}" defer></script>

@section('content')

<section> <!-- Título -->
    <div class="titulo-gestion">
        <h1>Gestión de productos</h1>
    </div>
</section>

<section>
    <div class="div-gestion-productos">
        <h1 class="accion">Agregar Producto</h1>
        <form class="crud-form form-gestion-productos" action="{{route('products.store')}}">
            @csrf

            <input type="text" name="nombre" placeholder="Nombre" required>
            <br>
            <input type="text" name="precio" placeholder="Precio" required>
            <br>
            <input id="boton-enviar-gestion-productos" type="submit" value="Enviar">
            <input type="hidden" name="id">
        </form>

        <h2>Listar Productos</h2>
        <table class="crud-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                <tbody>
                </tbody>
            </thead>
        </table>
        <template id="crud-template">
            <tr>
                <td class="id"></td>
                <td class="nombre"></td>
                <td class="precio"></td>
                <td>
                    <button class="edit">Editar</button>
                    <button class="eliminar">Eliminar</button>
                </td>

            </tr>
        </template>
    </div>
</section>

<section>
    <button type="button" class="boton-ver-producto">Volver</button>
</section>

@endsection
