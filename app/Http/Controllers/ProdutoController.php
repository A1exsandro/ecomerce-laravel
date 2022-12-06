<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = [];

        //Buscar todos os produtos
        $listProducts = Produto::all();
        $data["list"] = $listProducts;

        return view("home", $data);
    }

    public function categoria(Request $request){
        $data = [];

        //SELECT * FROM categorias
        //$listCategories

        return view("categoria", $data);
    }
}
