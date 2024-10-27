<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PosicoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posicoes')->insert([
            'descricao' => 'Atacante',
            'sigla' => 'A'
        ]);
        DB::table('posicoes')->insert([
            'descricao' => 'Meia',
            'sigla' => 'M'
        ]);
        DB::table('posicoes')->insert([
            'descricao' => 'Defensor',
            'sigla' => 'D'
        ]);
        DB::table('posicoes')->insert([
            'descricao' => 'Goleiro',
            'sigla' => 'G'
        ]);
    }

}
