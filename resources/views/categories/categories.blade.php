@section('cuerpo')

@forelse ($categories as $category)
Categoria: <a href= "{{route('categorias.show', $category->id)}}">{{$category->name}}</a>
<br><br>
@empty

@endforelse
