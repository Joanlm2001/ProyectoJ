@extends('layouts.layout')
@section('content')
@forelse ($categories as $category)
Categoria: <a href= "{{route('categorias.show', $category->id)}}">{{$category->name}}</a>
<br><br>
@empty

@endforelse

<h1 class="categoria"></h1>
@endsection
