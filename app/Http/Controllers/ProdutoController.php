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

    public function addCart($idproduct = 0, Request $request){
        $prod = Produto::find($idproduct);

        if($prod){
            $cart = session('cart', []);
            array_push($cart, $prod);
            session(['cart' => $cart]);
        }
        return redirect()->route("home");
    }

    public function showCart(Request $request){
        $cart = session('cart', []);
        // dd($cart);
        $data = ['cart' => $cart];

        return view("cart", $data);
    }

    public function deleteCart($index, Request $request){
        $cart = session('cart', []);
        if(isset($cart[$index])){
            unset($cart[$index]);
        }
        session(["cart" => $cart]);
        return redirect()->route("show_cart");
    }
}
