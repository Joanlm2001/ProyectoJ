@extends('layouts.layout')
@section('cuerpo')
<script type="text/javascript" src="{!! asset('js/productos.js') !!}" defer></script>
Categoria: <h1 class="categoria">{{$category->name}}</h1>
<br><br>

<section>
    <div id="container-products">

    </div>
</section>
