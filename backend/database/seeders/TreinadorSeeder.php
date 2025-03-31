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
        // Armazenará os dados dos treinadores
        DB::table('treinadores')->insert([ // Sport (maior do nordeste)
            'nome' => 'Pedro Marques',
            'pais_origem' => 'PRT',
            'clube' => '1959',
        ]);

        DB::table('treinadores')->insert([ // Cruzeiro
            'nome' => 'Leonardo Jardim',
            'pais_origem' => 'PRT',
            'clube' => '1954',
        ]);

        DB::table('treinadores')->insert([ // Fluminense
            'nome' => 'Roger Machado',
            'pais_origem' => 'BRA',
            'clube' => '1966',
        ]);

        DB::table('treinadores')->insert([ // Bahia
            'nome' => 'Rogério Ceni',
            'pais_origem' => 'BRA',
            'clube' => '1955',
        ]);

        DB::table('treinadores')->insert([ // Santos
            'nome' => 'Pedro Caixinha',
            'pais_origem' => 'PRT',
            'clube' => '1968',
        ]);

        DB::table('treinadores')->insert([ // Juventude
            'nome' => 'Fábio Matias',
            'pais_origem' => 'BRA',
            'clube' => '1980',
        ]);

        DB::table('treinadores')->insert([ // Fluminense
            'nome' => 'Marco Aurélio',
            'pais_origem' => 'BRA',
            'clube' => '1961',
        ]);

        DB::table('treinadores')->insert([ // Bragantino
            'nome' => 'Fernando Seabra',
            'pais_origem' => 'BRA',
            'clube' => '1999',
        ]);

        DB::table('treinadores')->insert([ // São Paulo
            'nome' => 'Luis Zubeldía',
            'pais_origem' => 'ARG',
            'clube' => '1981',
        ]);

        DB::table('treinadores')->insert([ // Fortaleza
            'nome' => 'Juan Vojvoda',
            'pais_origem' => 'ARG',
            'clube' => '2020',
        ]);

        DB::table('treinadores')->insert([ // Vasco da gama
            'nome' => 'Fábio Carille',
            'pais_origem' => 'BRA',
            'clube' => '1974',
        ]);

        DB::table('treinadores')->insert([
            'nome' => 'Gustavo Quinteros', // Grêmio
            'pais_origem' => 'ARG',
            'clube' => '5926',
        ]);

        DB::table('treinadores')->insert([ // Corinthians
            'nome' => 'Ramón Díaz',
            'pais_origem' => 'ARG',
            'clube' => '1957',
        ]);

        DB::table('treinadores')->insert([ // Atlético MG
            'nome' => 'Gabriel Milito',
            'pais_origem' => 'ARG',
            'clube' => '1977',
        ]);

        DB::table('treinadores')->insert([ // Ceará
            'nome' => 'Léo Condé',
            'pais_origem' => 'BRA',
            'clube' => '2001',
        ]);

        DB::table('treinadores')->insert([ // Mirassol
            'nome' => 'Rafael Guanaes',
            'pais_origem' => 'BRA',
            'clube' => '21982',
        ]);

        DB::table('treinadores')->insert([ // Flamengo
            'nome' => 'Filipe Luís',
            'pais_origem' => 'BRA',
            'clube' => '5981',
        ]);

        DB::table('treinadores')->insert([ // Botafogo
            'nome' => 'Renato Paiva',
            'pais_origem' => 'PRT',
            'clube' => '1958',
        ]);

        DB::table('treinadores')->insert([ // Vitória
            'nome' => 'Antônio Machado',
            'pais_origem' => 'PRT',
            'clube' => '1962',
        ]);

        DB::table('treinadores')->insert([ // Palmeiras
            'nome' => 'Abel Ferreira',
            'pais_origem' => 'PRT',
            'clube' => '1963',
        ]);


    }
}
