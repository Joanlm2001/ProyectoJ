@extends('layouts.layout')

@section('content')

@forelse ($categories as $category)
Categoria: <a href= "{{route('categorias.show', $category->id)}}">{{$category->name}}</a>
<br><br>
@empty

@endforelse

<<<<<<< HEAD
<h1 class="categoria"></h1>
=======
>>>>>>> 0a886f07bd0db6402b1e8d9ac2b4132d0a24a646
@endsection
