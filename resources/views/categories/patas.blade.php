@extends('layouts.layout')

@section('content')
<h1 class="patas">Patas</h1>
@forelse ($products as $product)
@if (strcmp($product->category->name, "Patas")==0)

@endif
@empty
No hay productos
@endforelse
@endsection
