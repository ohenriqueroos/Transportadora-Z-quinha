<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\cliente;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::create([
            'nomecompleto' => 'João Batata', 
            'email' => 'Joao@batatacompany.com.br',
            'senha' => Hash::make('Batata12'),
            'telefone' => '4791234-4321',
            'endereco' => 'Avenida das Batatas, 123 - Bairro: Bataton - Potato City',
            'cpf' => '12345678900',
            'datanascimento' => '2020-01-05',
        ]);
    }
}
