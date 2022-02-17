@extends('layouts.layout')

@section('content')
<h1 class="muebles">{{$nombre}}</h1>

@forelse ($productos as $product)
{{$product->name}}
<br>
@empty
No hay productos
@endforelse
@endsection
