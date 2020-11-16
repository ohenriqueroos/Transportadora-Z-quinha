<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\cliente;

use App\Models\pedido;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function funcao (Request $req) {
        $cliente = new cliente();
        $cliente->fill($req->all());
        $cliente['senha'] = Hash::make($cliente['senha']);
        $cliente->save();
        return redirect('logincadastro');    
    }

    public function novopedido (Request $req) {
        $req['rastreamento'] = Str::uuid();
        $req['id_cliente'] = 1;
        $pedido = new pedido();
        $pedido->fill($req->all());
        $pedido->save();
        return redirect('acompanharentrega');
    }


   public function listaPedidos (Request $req) {
       $pedido = pedido::get();
       return view('acompanharentrega', compact('pedido'));
   }

   public function loadPedido (Request $req) {
        $pedido = pedido::where('rastreamento', $req->id)->first();
        return view('pedido', compact('pedido'));
    }

    public function updatePedido (Request $req) {
        $pedido = pedido::find($req['id_pedido']);
        $pedido['nomedestinatario'] = $req['nomedestinatario'];
        $pedido['telefonedestinatario'] = $req['telefonedestinatario'];
        $pedido['enderecodestinatario'] = $req['enderecodestinatario'];
        $pedido->save();
        return redirect('pedido/' . $pedido['rastreamento']);
    }

    public function checkLogin (Request $req) {
        $cliente = cliente::where('email', $req['email'])->first();
        // return $req['senha'];
        if(Hash::check($req['senha'], $cliente['senha'])){
            $req->session()->put('cliente', $cliente);
            return redirect('acompanharentrega');
        }
        return redirect('logincadastro');
        // if ($cliente['senha'] == $req['senha']){
        //     return redirect('acompanharentrega');
    }

    public function logout (Request $req) {
        $req->session()->flush();
        return redirect('/');
    }

    public function loadHome (Request $req) {
        $cliente = cliente::get();
        return view('home', compact('cliente'));
    }
}