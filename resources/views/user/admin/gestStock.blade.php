@extends('layouts.layoutAdmin')

@section('content')

<section> <!-- Título -->
    <div class="titulo-gestion">
        <h1>Gestión de stock</h1>
    </div>
</section>

<section>
    <div id="div-gestion-stock">
        <button class="botones-gestion-stock">Productos más vendidos</button>
        <button class="botones-gestion-stock">Productos menos vendidos</button>
        <button class="botones-gestion-stock">Ver pedidos por fecha</button>
        <button class="botones-gestion-stock">Ver pedidos por importe</button>
    </div>
    <div id="container-products">
        <div>
            <article>
                <div>
                    <a class="products" href="#"><img class="img-products" src="../img/product01.jpg" alt="Foto de mueble 1" title="Ver producto"></a>
                </div>
                <h1><a class="nombre-producto" href="#">Nook</a></h1>
                <p class="descripcion-producto">Mueble de baño + Lavabo</p>
                <p class="precio-producto">500 €</p>
                <div>
                    <button class="boton-ver-producto" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>Añadir al carrito</button>
                </div>
            </article>
        </div>
        <div>
            <article>
                <div>
                    <a class="products" href="#"><img class="img-products" src="../img/product01.jpg" alt="Foto de mueble 1" title="Ver producto"></a>
                </div>
                <h1><a class="nombre-producto" href="#">Nook</a></h1>
                <p class="descripcion-producto">Mueble de baño + Lavabo</p>
                <p class="precio-producto">500 €</p>
                <div>
                    <button class="boton-ver-producto" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>Añadir al carrito</button>
                </div>
            </article>
        </div>
        <div>
            <article>
                <div>
                    <a class="products" href="#"><img class="img-products" src="../img/product01.jpg" alt="Foto de mueble 1" title="Ver producto"></a>
                </div>
                <h1><a class="nombre-producto" href="#">Nook</a></h1>
                <p class="descripcion-producto">Mueble de baño + Lavabo</p>
                <p class="precio-producto">500 €</p>
                <div>
                    <button class="boton-ver-producto" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>Añadir al carrito</button>
                </div>
            </article>
        </div>
    </div>
</section>

<section>
    <button type="button" class="boton-ver-producto">Volver</button>
</section>

@endsection
