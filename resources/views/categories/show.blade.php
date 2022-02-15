@extends('layouts.layout')

@section('content')
<script type="text/javascript" src="{!! asset('js/productos.js') !!}" defer></script>
<h1 class="categoria" id="textos-featured">{{$category->name}}</h1>



<section>
    <div id="container-products">
    </div>
</section>


<div id="boton-ver-mas">

</div>

@endsection
