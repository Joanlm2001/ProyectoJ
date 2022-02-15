<<<<<<< HEAD
<h1>Estas en la vista del admin</h1>
<a href="{{route('Productos')}}">Editar Productos</a>
<a href="{{route('Usuarios')}}">Gestionar Usuarios</a>
<a href="{{route('Stock')}}">Gestionar Stock</a>
=======
{{-- <h1>Estas en la vista del admin</h1>
<a href="{{route('Stock')}}">Editar Productos</a>
<a href="{{route('Usuarios')}}">Gestionar Usuarios</a>
<a href="{{route('Productos')}}">Gestionar Stock</a> --}}
>>>>>>> 27407fff2bbaa055bd7aa95b5d380d68a61076c3

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
