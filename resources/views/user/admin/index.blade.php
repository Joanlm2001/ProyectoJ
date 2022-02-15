{{-- <h1>Estas en la vista del admin</h1>
<a href="{{route('Stock')}}">Editar Productos</a>
<a href="{{route('Usuarios')}}">Gestionar Usuarios</a>
<a href="{{route('Productos')}}">Gestionar Stock</a> --}}

@extends('layouts.layout')

@section('content')

<main>
    <section>
        <div id="textos-featured">
            <h1>ADMIN</h1>
        </div>
        <div id="div-gestion">
            <a class="botones-gestion" href="{{route('Productos')}}">Gestión de Productos</a>
            <a class="botones-gestion" href="{{route('Usuarios')}}">Gestión de Usuarios</a>
            <a class="botones-gestion" href="{{route('Stock')}}">Gestión de Stock</a>
        </div>
    </section>
</main>

@endsection
