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
        \Uhmane\Contatos::truncate();
        factory(\Uhmane\Contatos::class,10)->create();
    }
}
