<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\cliente;

use App\Models\pedido;

class HomeController extends Controller
{
    public function funcao (Request $req) {
        $cliente = new cliente();
        $cliente->fill($req->all());
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
        $pedido['nomedestinatario'] = $req ['nomedestinatario'];
        $pedido['telefonedestinatario'] = $req ['telefonedestinatario'];
        $pedido['enderecodestinatario'] = $req ['enderecodestinatario'];
        $pedido->save();
        return redirect('acompanharentrega');
    }

    public function listaClientes (Request $req) {
        $cliente = cliente::get();
        return view('cliente', compact('cliente'));
    }

    public function loadCliente (Request $req) {
        $cliente = cliente::where('id_cliente', $req->id)->first();
        return view('dadoscliente', compact('cliente'));
    }

    public function updateCliente (Request $req) {
        $cliente = cliente::find($req['id_cliente']);
        $cliente['nomecompleto'] = $req ['nomecompleto'];
        $cliente['email'] = $req ['email'];
        $cliente['telefone'] = $req ['telefone'];
        $cliente['endereco'] = $req ['endereco'];
        $cliente['cpf'] = $req ['cpf'];
        $cliente['datanascimento'] = $req ['datanascimento'];
        $cliente['senha'] = $req ['senha'];
        $cliente->save();
        return redirect('cliente');
    }


    public function loadHome (Request $req) {
        $cliente = cliente::get();
        return view('home', compact('cliente'));
    }
}