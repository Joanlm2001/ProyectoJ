@extends('layouts.layout')
<<<<<<< HEAD
<script type="text/javascript" src="{!! asset('js/productos.js') !!}" defer></script>
@section('content')
Categoria: <h1 class="categoria">{{$category->name}}</h1>
<br><br>
=======
@section('content')
<script type="text/javascript" src="{!! asset('js/productos.js') !!}" defer></script>
<h1 class="categoria" id="textos-featured">{{$category->name}}</h1>

>>>>>>> 27407fff2bbaa055bd7aa95b5d380d68a61076c3

<section>
    <div id="container-products">
    </div>
</section>

<<<<<<< HEAD
<div id="boton-ver-mas">
    
</div>
=======
>>>>>>> 27407fff2bbaa055bd7aa95b5d380d68a61076c3
@endsection
