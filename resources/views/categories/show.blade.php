@extends('layouts.layout')
<script type="text/javascript" src="{!! asset('js/productos.js') !!}" defer></script>
@section('content')
Categoria: <h1 class="categoria">{{$category->name}}</h1>
<br><br>

<section>
    <div id="container-products">
    </div>
</section>

<div id="boton-ver-mas">
    
</div>
@endsection
