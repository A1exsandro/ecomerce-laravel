@extends("layout")

@section("content")
    <div class="col-12">
        <h2 class="mb-3">Cadastrar Cliente</h2>

        <form action="" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        Nome: <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        E-mail: <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        Cpf: <input type="text" name="cpf" class="form-control">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        Senha: <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        Endereço: <input type="text" name="address" class="form-control">
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        Cidade: <input type="text" name="city" class="form-control">
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="form-group">
                        Cep: <input type="text" name="cep" class="form-control">
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        Estado: <input type="text" name="state" class="form-control">
                    </div>
                </div>
            </div>
            <input type="submit" value="Register" class="btn btn-success btn-sm col-2 mt-3">
        </form>
    </div>
@endsection