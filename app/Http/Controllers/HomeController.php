<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\users;

use App\Models\pedido;

use App\Models\messages;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function funcao (Request $req) {
        $users = new users();
        $users->fill($req->all());
        $users['senha'] = Hash::make($users['senha']);
        $users->save();
        return redirect('logincadastro');    
    }

    public function novopedido (Request $req) {
        $req['rastreamento'] = Str::uuid();
        $req['id_users'] = 1;
        $pedido = new pedido();
        $pedido->fill($req->all());
        $pedido['id_users'] = $req->session()->get('users')->id_users;
        $pedido->save();
        return redirect('acompanharentrega');
    }


   public function listaPedidos (Request $req) {
       $pedido = pedido::where('id_users', $req->session()->get('users')->id_users)->get();
       return view('acompanharentrega', compact('pedido'));
   }

   public function loadPedido (Request $req) {
        $pedido = pedido::where('rastreamento', $req->id)->first();
        return view('pedido', compact('pedido'));
    }

    public function listaPedidosA (Request $req) {
        $pedido = pedido::where('id_users', $req->session()->get('users')->id_users)->get();
        return view('admin', compact('pedido'));
        }
    
    public function loadPedidoA (Request $req) {
        $pedido = pedido::where('rastreamento', $req->id)->first();
        return view('adminpedido', compact('pedido'));
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
        $users = cliente::where('id_users', $req->session()->get('users')->id_users)->first();
        return view('perfil', compact('users'));
    }

    public function updateCliente (Request $req) {
        $users = users::find($req['id_users']);
        $users['nomecompleto'] = $req['nomecompleto'];
        $users['telefone'] = $req['telefone'];
        $users['endereco'] = $req['endereco'];
        $users['cpf'] = $req['cpf'];
        $users['datanascimento'] = $req['datanascimento'];
        if (!is_null($req['novasenha'])) {
            $users['senha'] = Hash::make($req['novasenha']);
        }
        $users->save();
        $req->session()->put('users', $users);
        return redirect('perfil');
    }

    public function checkLogin (Request $req) {
        $users = users::where('email', $req['email'])->first();
        // return $req['senha'];
        if(Hash::check($req['senha'], $users['senha'])){
            $req->session()->put('users', $users);
            return redirect('acompanharentrega');
        }
        return redirect('logincadastro');
        // if ($users['senha'] == $req['senha']){
        //     return redirect('acompanharentrega');
    }

    public function logout (Request $req) {
        $req->session()->flush();
        return redirect('/');
    }

    public function loadHome (Request $req) {
        $users = users::get();
        return view('home', compact('users'));
    }
}