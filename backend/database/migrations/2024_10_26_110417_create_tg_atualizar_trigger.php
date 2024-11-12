<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Trigger que atualizará os dados da tabela a cada jogo inserido no banco de dados
        DB::unprepared('
            CREATE TRIGGER tg_atualizar_tabela
                AFTER
                UPDATE
            ON jogos
            FOR EACH ROW
            BEGIN

                IF NEW.status = 1 then 

                    IF NEW.gols_clube_casa > NEW.gols_clube_fora then
                            
                        UPDATE tabelas
                        SET tabelas.pontos = tabelas.pontos + 3, tabelas.jogos = tabelas.jogos + 1, 
                            tabelas.vitorias = tabelas.vitorias + 1,
                            tabelas.gols_pros = tabelas.gols_pros + NEW.gols_clube_casa, 
                            tabelas.gols_contras = tabelas.gols_contras + NEW.gols_clube_fora,
                            tabelas.saldo_gols = (tabelas.gols_pros - tabelas.gols_contras)
                        WHERE tabelas.clube = NEW.clube_casa;
                        
                        UPDATE tabelas
                        SET tabelas.jogos = tabelas.jogos + 1, 
                            tabelas.derrotas = tabelas.derrotas + 1,
                            tabelas.gols_pros = tabelas.gols_pros + NEW.gols_clube_fora, 
                            tabelas.gols_contras = tabelas.gols_contras + NEW.gols_clube_casa,
                            tabelas.saldo_gols = (tabelas.gols_pros - tabelas.gols_contras)
                        WHERE tabelas.clube = NEW.clube_fora;	
                            
                    ELSEIF NEW.gols_clube_casa < NEW.gols_clube_fora then
                    
                        UPDATE tabelas
                        SET tabelas.pontos = tabelas.pontos + 3, tabelas.jogos = tabelas.jogos + 1, 
                            tabelas.vitorias = tabelas.vitorias + 1,
                            tabelas.gols_pros = tabelas.gols_pros + NEW.gols_clube_fora, 
                            tabelas.gols_contras = tabelas.gols_contras + NEW.gols_clube_casa,
                            tabelas.saldo_gols = (tabelas.gols_pros - tabelas.gols_contras)
                        WHERE tabelas.clube = NEW.clube_fora;
                        
                        UPDATE tabelas
                        SET tabelas.jogos = tabelas.jogos + 1, 
                            tabelas.derrotas = tabelas.derrotas + 1,
                            tabelas.gols_pros = tabelas.gols_pros + NEW.gols_clube_casa, 
                            tabelas.gols_contras = tabelas.gols_contras + NEW.gols_clube_fora,
                            tabelas.saldo_gols = (tabelas.gols_pros - tabelas.gols_contras)
                        WHERE tabelas.clube = NEW.clube_casa;
                    
                    ELSE 
                        
                        UPDATE tabelas
                        SET tabelas.pontos = tabelas.pontos + 1, tabelas.jogos = tabelas.jogos + 1, 
                            tabelas.empates = tabelas.empates + 1,
                            tabelas.gols_pros = tabelas.gols_pros + NEW.gols_clube_casa, 
                            tabelas.gols_contras = tabelas.gols_contras + NEW.gols_clube_fora,
                            tabelas.saldo_gols = (tabelas.gols_pros - tabelas.gols_contras)
                        WHERE tabelas.clube = NEW.clube_fora;
                        
                        UPDATE tabelas
                        SET tabelas.pontos = tabelas.pontos + 1, tabelas.jogos = tabelas.jogos + 1, 
                            tabelas.empates = tabelas.empates + 1,
                            tabelas.gols_pros = tabelas.gols_pros + NEW.gols_clube_fora, 
                            tabelas.gols_contras = tabelas.gols_contras + NEW.gols_clube_casa,
                            tabelas.saldo_gols = (tabelas.gols_pros - tabelas.gols_contras)
                        WHERE tabelas.clube = NEW.clube_casa;
                        
                    END IF;
                    
                END IF;	
                
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tg_atualizar_trigger');
    }
};
