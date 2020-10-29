<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\cliente;

use App\Models\pedido;

class HomeController extends Controller
{
    public function funcao (Request $req) {
        $req['nomecompleto'] = "Eriquisom";
        $cliente = new cliente();
        $cliente->fill($req->all());
        $cliente->save();
        return $cliente;    
    }




    public function novopedido (Request $req) {
        $req['rastreamento'] = Str::uuid();
        $req['id_cliente'] = 1;
        $pedido = new pedido();
        $pedido->fill($req->all());
        $pedido->save();
        return $pedido;
    }

    // public function pedido (Request $req) {
    //     $pedido = new pedido();
    //     $pedido->fill($req->all());
    //     $pedido->save();
    //     return $pedido;    
    // }

    // public function listapedidos (Request $req) {
    //     $pedido = pedido::get();
    //     return view('pedido', compact('pedido'));
    // }

    // public function loadPedido (Request $req) {
    //     $pedido = pedido::where('nomedestinatario', $req->id)->first();
    //     return view('pedido', compact('pedido'));
    // }

    public function loadHome (Request $req) {
        $cliente = cliente::get();
        return view('home', compact('cliente'));
    }
}