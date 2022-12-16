@extends("layout")

@section("scriptjs")
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function(){
        $("#cpf").mask("000.000.000-00")
    })
</script>
@endsection

@section("content")
    <div class="col-12">
        <h2 class="mb-3">Cadastrar Cliente</h2>

        <form action="{{ route('register_client') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        Nome: <input type="text" name="nome" class="form-control">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        E-mail: <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        Login: <input type="text" id="cpf" name="login" class="form-control">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        Senha: <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="col-11">
                    <div class="form-group">
                        Endereço: <input type="text" name="address" class="form-control">
                    </div>
                </div>

                <div class="col-1">
                    <div class="form-group">
                        Número: <input type="text" name="number" class="form-control">
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        Complemento: <input type="text" name="complement" class="form-control">
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        Cidade: <input type="text" name="city" class="form-control">
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="form-group">
                        Cep: <input type="text" name="cep" class="form-control">
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-group">
                        Estado: <input type="text" name="state" class="form-control">
                    </div>
                </div>
            </div>
            <input type="submit" value="Register" class="btn btn-success btn-sm col-2 mt-3">
        </form>
    </div>
@endsection