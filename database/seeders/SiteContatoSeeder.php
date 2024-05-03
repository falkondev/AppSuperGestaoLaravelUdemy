<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato = new SiteContato();
        // $contato->nome = 'Sistema SG';
        // $contato->telefone = '35222345';
        // $contato->email = 'sistemasg@gmail.com';
        // $contato->motivo_contato = 1;
        // $contato->mensagem = 'Seja bem-vindo ao sistema Super Gestão!';
        // $contato->save();

        SiteContato::factory(SiteContatoFactory::class)->count(100)->create();
    }
}
