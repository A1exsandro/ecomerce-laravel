<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecomerce</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-100 pr-100 mb-5">
      <a href="#" class="navbar-brand">MyShop</a>
      <div class="collapse navbar-collapse">
        <div class="navbar-nav">
          <a href="{{ route('home') }}" class="nav-link">Home</a>
          <a href="{{ route('categoria') }}" class="nav-link">Categorias</a>
          <a href="{{ route('cadastrar') }}" class="nav-link">Cadastrar</a>
        </div>
      </div>

      <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
      <div class="row">
            <!-- this is DIV that the file add content -->
            @yield("content")
      </div>
    </div>
</body>
</html>