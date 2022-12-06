<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Categorias</h2>

    @if(isset($listCategorias) && count($listCategorias) > 0)
        <ul>
            @foreach($listCategorias as $cat)
                <li>{{ $cat->categoria }}</li>
            @endforeach
        </ul>
    @endif

    @if(isset($list) && count($list) > 0)
        <ul>
            @foreach($list as $prod)
                <li>{{ $prod->nome }}</li>
            @endforeach
        </ul>
    @endif
    
</body>
</html>