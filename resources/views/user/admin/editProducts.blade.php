<script type="text/javascript" src="{!! asset('js/editarProductos.js') !!}" defer></script>

<h1 class="accion">Agregar</h1>
    <form class="crud-form" action="{{route('products.store')}}">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre" required>
        <br>
        <input type="text" name="precio" placeholder="Precio" required>
        <br>
        <input type="submit" value="Enviar">
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


