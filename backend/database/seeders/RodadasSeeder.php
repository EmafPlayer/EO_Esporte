<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RodadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 38; $i++) {
            DB::table('rodadas')->insert([
                'descricao' => "rodada_$i"
            ]);
        }
    }
}
