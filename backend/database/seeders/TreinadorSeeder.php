<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TreinadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treinadores')->insert([
            'nome' => 'Lucho Gonzalez',
            'pais_origem' => 'Argentina',
            'clube' => '1967',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Fernando Diniz',
            'pais_origem' => 'Brazil',
            'clube' => '1954',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Roger Machado',
            'pais_origem' => 'Brasil',
            'clube' => '1966',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Rogério Ceni',
            'pais_origem' => 'Brasil',
            'clube' => '1955',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Claudio Tencati',
            'pais_origem' => 'Brasil',
            'clube' => '1984',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Jair Ventura',
            'pais_origem' => 'Brasil',
            'clube' => '1980',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Mano Menezes',
            'pais_origem' => 'Brasil',
            'clube' => '1961',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Pedro Caixinha',
            'pais_origem' => 'Portugal',
            'clube' => '1999',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Luis Zubeldía',
            'pais_origem' => 'Argentina',
            'clube' => '1981',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Juan Pablo Vojvoda',
            'pais_origem' => 'Argentina',
            'clube' => '2020',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Rafael Paiva',
            'pais_origem' => 'Brasil',
            'clube' => '1974',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Renato Portaluppi',
            'pais_origem' => 'Brasil',
            'clube' => '5926',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Ramón Díaz',
            'pais_origem' => 'Argentina',
            'clube' => '1957',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Gabriel Milito',
            'pais_origem' => 'Argentina',
            'clube' => '1977',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Armando Gonçalves Teixeira',
            'pais_origem' => 'Portugal',
            'clube' => '49202',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Umberto Louzer',
            'pais_origem' => 'Brasil',
            'clube' => '7314',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Filipe Luís',
            'pais_origem' => 'Brasil',
            'clube' => '5981',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Artur Jorge',
            'pais_origem' => 'Portugal',
            'clube' => '1958',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Thiago Carpini',
            'pais_origem' => 'Brasil',
            'clube' => '1962',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Abel Ferreira',
            'pais_origem' => 'Portugal',
            'clube' => '1963',
        ]);


    }
}
