@extends('layouts.layout')

@section('content')
<h1 class="Glamour">Glamour</h1>

@forelse ($products as $product)
{{$product->name}}
<br>
@empty
No hay productos
@endforelse
@endsection
