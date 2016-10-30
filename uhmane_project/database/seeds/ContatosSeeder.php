<?php

use Illuminate\Database\Seeder;

class ContatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Uhmane\Models\Contatos::truncate();
        factory(\Uhmane\Models\Contatos::class,10)->create();
    }
}
