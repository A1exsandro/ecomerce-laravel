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

    public function categoria($idcategoria = 0, Request $request){
        $data = [];

        //SELECT * FROM categorias
        $listCategorias = Categoria::all();

        //SELECT * FROM produtos limit 4
        $queryProduct = Produto::limit(4);

        if($idcategoria != 0){
            $queryProduct->where("categoria_id", $idcategoria);
        }

        $listProducts = $queryProduct->get();
        
        // $data["list"] = $listProducts;
        $data["list"] = $listProducts;
        $data["listCategorias"] = $listCategorias;
        $data["idcategoria"] = $idcategoria;
        return view("categoria", $data);
    }
}
