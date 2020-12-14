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
        $pedido['id_cliente'] = $req->session()->get('cliente')->id_cliente;
        $pedido->save();
        return redirect('acompanharentrega');
    }


   public function listaPedidos (Request $req) {
       $pedido = pedido::where('id_cliente', $req->session()->get('cliente')->id_cliente)->get();
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

    public function delete ($id) {
    $pedido = pedido::find($id)->delete();
    return redirect('acompanharentrega');
    }

    public function loadCliente (Request $req) {
        $cliente = cliente::where('id_cliente', $req->session()->get('cliente')->id_cliente)->first();
        return view('perfil', compact('cliente'));
    }

    public function updateCliente (Request $req) {
        $cliente = cliente::find($req['id_cliente']);
        $cliente['nomecompleto'] = $req['nomecompleto'];
        $cliente['telefone'] = $req['telefone'];
        $cliente['endereco'] = $req['endereco'];
        $cliente['cpf'] = $req['cpf'];
        $cliente['datanascimento'] = $req['datanascimento'];
        $cliente->save();
        $req->session()->put('cliente', $cliente);
        return redirect('perfil');
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