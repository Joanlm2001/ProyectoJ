@extends('layouts.layout')
@section('content')
<script type="text/javascript" src="{!! asset('js/productos.js') !!}" defer></script>
Categoria: <h1 class="categoria">{{$category->name}}</h1>


<section>
    <div id="container-products">

    </div>
</section>

@endsection
