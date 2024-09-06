<?php

namespace Database\Seeders;

use App\Models\Jogo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Jogo::create(['nome'=>'GTA V', 'preco'=>70, 'desenvolvedor'=>'RockStar', 'distribuidor'=>'RockStar', 'genero'=>'SandBox']);
        Jogo::create(['nome'=>'Five Nights At Freddies', 'preco'=>20, 'desenvolvedor'=>'Scottgames', 'distribuidor'=>'ClickTeam', 'genero'=>'Terror']);
        Jogo::create(['nome'=>'Mario Bros', 'preco'=>500, 'desenvolvedor'=>'Nintendo', 'distribuidor'=>'Nintendo', 'genero'=>'plataforma']);
    }
}
