@extends("layout")

@section("content")
    <div class="col-2">
        @if(isset($listCategorias) && count($listCategorias) > 0)
            <div class="list-group">
                <a href="{{ route('categoria') }}" class="list-group-item  active">Todas</a>
                @foreach($listCategorias as $cat)
                    <a href="{{ route('categoria_by_id', ['idcategoria' => $cat->id ]) }}" 
                        class="list-group-item list-group-item-action @if($cat->id === $idcategoria) active @endif">
                        {{ $cat->categoria }}
                    </a>
                @endforeach
            </div>
        @endif
    </div>

    <div class="col-10">
        @include("_products", [ 'list' => $list ])
    </div>
@endsection