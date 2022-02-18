@extends('layouts.layout')

<script type="text/javascript" src="{!! asset('js/slider.js') !!}" defer></script>
<script type="text/javascript" src="{!! asset('js/carrito.js') !!}" defer></script>

@section('content')

<section><!--Slider-->
    <div class="mySlides fade">
        <div id="slider-01">
            <article id="div-slider-01">
                <h1 id="texto-slider-01">NORDIC is coming!</h1><!--Texto H1-->
                <h2>Descubre la nueva colección</h2>
                <div>
                    <button id="btn-slider-01">Ver estilo Nórdico</button><!--Botón-->
                </div>
            </article>
        </div>
    </div>
    <div class="mySlides fade">
        <div id="slider-02">
            <article id="div-slider-02">
                <h1 id="texto-slider-02">Pasión por lo natural</h1><!--Texto H1-->
                <h2>Tu baño, más cálido</h2>
                <div>
                    <button id="btn-slider-02">Ver estilo Boho</button><!--Botón-->
                </div>
            </article>
        </div>
    </div>
    <div class="mySlides fade">
        <div id="slider-03">
            <article>
                <h1 id="texto-slider-03">Estructuras a la vista</h1><!--Texto H1-->
                <h2>
                     de baño con mucho carácter</h2>
                <div>
                    <button id="btn-slider-03">Ver estilo Industrial</button><!--Botón-->
                </div>
            </article>
        </div>
    </div>
    <div class="mySlides fade">
        <div id="slider-04">
            <article>
                <h1 id="texto-slider-04">¿Buscas sofisticación?</h1><!--Texto H1-->
                <h2>Traemos el lujo para el baño</h2>
                <div>
                    <button id="btn-slider-04">Ver estilo Glamour</button><!--Botón-->
                </div>
            </article>
        </div>
    </div>
    <div class="boton-ver-productos">
        <button href="#"> Ver Muebles</button>
    </div>
</section>

<section><!--Products-->
    <div id="textos-featured">
        <h1>MUEBLES</h1>
    </div>
    <div id="container-products">
        <div>
            <article>
                <div>
                    <a class="products" href="#"><img class="img-products" src="../public/img/muebles/Nook.webp" alt="Foto de mueble 1" title="Ver producto"></a>
                </div>
                <h1><a class="nombre-producto" href="#">Nook</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo nórdico en 80, 100, 120 y 140 cm. Varios acabados disponibles.</p>
                <p class="precio-producto">549 €</p>
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
                <h1><a class="nombre-producto" href="#">Bend</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo boho en 60 y 80 cm. Acabado blanco brillo. Patas incluidas.</p>
                <p class="precio-producto">399 €</p>
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
                <h1><a class="nombre-producto" href="#">Olive</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo industrial en 80, 100 y 120 cm. Acabado verde mate y blanco mate.</p>
                <p class="precio-producto">719 €</p>
                <div>
                    <button class="boton-ver-producto" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>Añadir al carrito</button>
                </div>
            </article>
        </div>
    </div>
    <div class="boton-ver-x">
        <button href="#"> Ver Muebles</button>
    </div>
</section>

<section><!--Products-->
    <div id="textos-featured">
        <h1>ESPEJOS</h1>
    </div>
    <div id="container-products">
        <div>
            <article>
                <div>
                    <a class="products" href="#"><img class="img-products" src="../public/img/muebles/Nook.webp" alt="Foto de mueble 1" title="Ver producto"></a>
                </div>
                <h1><a class="nombre-producto" href="#">Nook</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo nórdico en 80, 100, 120 y 140 cm. Varios acabados disponibles.</p>
                <p class="precio-producto">549 €</p>
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
                <h1><a class="nombre-producto" href="#">Bend</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo boho en 60 y 80 cm. Acabado blanco brillo. Patas incluidas.</p>
                <p class="precio-producto">399 €</p>
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
                <h1><a class="nombre-producto" href="#">Olive</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo industrial en 80, 100 y 120 cm. Acabado verde mate y blanco mate.</p>
                <p class="precio-producto">719 €</p>
                <div>
                    <button class="boton-ver-producto" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>Añadir al carrito</button>
                </div>
            </article>
        </div>
    </div>
    <div class="boton-ver-x">
        <button href="#"> Ver Espejos</button>
    </div>
</section>

<section><!--Products-->
    <div id="textos-featured">
        <h1>PATAS</h1>
    </div>
    <div id="container-products">
        <div>
            <article>
                <div>
                    <a class="products" href="#"><img class="img-products" src="../public/img/muebles/Nook.webp" alt="Foto de mueble 1" title="Ver producto"></a>
                </div>
                <h1><a class="nombre-producto" href="#">Nook</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo nórdico en 80, 100, 120 y 140 cm. Varios acabados disponibles.</p>
                <p class="precio-producto">549 €</p>
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
                <h1><a class="nombre-producto" href="#">Bend</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo boho en 60 y 80 cm. Acabado blanco brillo. Patas incluidas.</p>
                <p class="precio-producto">399 €</p>
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
                <h1><a class="nombre-producto" href="#">Olive</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo industrial en 80, 100 y 120 cm. Acabado verde mate y blanco mate.</p>
                <p class="precio-producto">719 €</p>
                <div>
                    <button class="boton-ver-producto" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>Añadir al carrito</button>
                </div>
            </article>
        </div>
    </div>
    <div class="boton-ver-x">
        <button href="#"> Ver Patas</button>
    </div>
</section>

<section><!--Products-->
    <div id="textos-featured">
        <h1>ACCESORIOS</h1>
    </div>
    <div id="container-products">
        <div>
            <article>
                <div>
                    <a class="products" href="#"><img class="img-products" src="../public/img/muebles/Nook.webp" alt="Foto de mueble 1" title="Ver producto"></a>
                </div>
                <h1><a class="nombre-producto" href="#">Nook</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo nórdico en 80, 100, 120 y 140 cm. Varios acabados disponibles.</p>
                <p class="precio-producto">549 €</p>
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
                <h1><a class="nombre-producto" href="#">Bend</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo boho en 60 y 80 cm. Acabado blanco brillo. Patas incluidas.</p>
                <p class="precio-producto">399 €</p>
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
                <h1><a class="nombre-producto" href="#">Olive</a></h1>
                <p class="descripcion-producto">Mueble de baño de estilo industrial en 80, 100 y 120 cm. Acabado verde mate y blanco mate.</p>
                <p class="precio-producto">719 €</p>
                <div>
                    <button class="boton-ver-producto" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>Añadir al carrito</button>
                </div>
            </article>
        </div>
    </div>
    <div class="boton-ver-x">
        <button href="#"> Ver Accesorios</button>
    </div>
</section>

@endsection



{{-- ICONO DE CARRITO DE LARAVEL:
    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
</svg> --}}
