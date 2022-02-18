@extends('layouts.layout')

@section('content')
<h1 class="Nordico">Nordico</h1>

@forelse ($products as $product)
{{$product->name}}
<br>
@empty
No hay productos
@endforelse
@endsection
