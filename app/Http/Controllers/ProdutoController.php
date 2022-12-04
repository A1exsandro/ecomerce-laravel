<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = [];

        //Buscar todos os produtos
        $listProducts = \App\Models\Produto::all();
        $data["list"] = $listProducts;

        return view("home", $data);
    }

    public function categoria(Request $request){
        $data = [];

        return view("categoria", $data);
    }
}
