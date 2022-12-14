<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

class ClienteController extends Controller
{
    public function index(Request $request){
        $data = [];

        return view("register", $data);
    }

    public function registerClient(Request $request){

        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        //dd($usuario);

        $endereco = new Endereco($values);
        //dd($endereco);

        try{
            $usuario->save();
            $endereco->usuario_id = $usuario->id;
            $endereco->save();
        }catch(\Exception $e){

        }

        return redirect()->route("register");
    }
}
