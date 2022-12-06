@extends("layout")

@section("content")
    <h2>Categorias</h2>

    @if(isset($listCategorias) && count($listCategorias) > 0)
        <ul>
            <li><a href="{{ route('categoria') }}">Todas</a></li>
            @foreach($listCategorias as $cat)
                <li>
                    <a href="{{ route('categoria_by_id', ['idcategoria' => $cat->id ]) }}">{{ $cat->categoria }}</a>
                </li>
            @endforeach
        </ul>
    @endif

    @include("_products", [ 'list' => $list ])
@endsection