<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\users;


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
            'nomecompleto' => 'Henrique Matheus Roos', 
            'email' => 'admin@zequinha.com',
            'senha' => Hash::make('admin'),
            'telefone' => '4791234-4321',
            'endereco' => 'Avenida das Batatas, 123 - Bairro: Bataton - Potato City',
            'cpf' => '12345678900',
            'datanascimento' => '1999-07-31',
            'tipo' => '0',
        ]);
    }
}
