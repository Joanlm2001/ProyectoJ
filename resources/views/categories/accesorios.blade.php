@extends('layouts.layout')

@section('content')
<h1 class="accesorios">Accesorios</h1>
@forelse ($products as $product)

{{$product->name}}
<br>


@empty
No hay productos
@endforelse
@endsection
