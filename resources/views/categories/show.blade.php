@section('cuerpo')
Categoria: {{$category->name}}
<br><br>

@forelse ($category->products as $products)
    {{$products->name}};
    {{$products->price}};
@empty
Sin productos
@endforelse
