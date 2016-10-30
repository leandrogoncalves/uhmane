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
        \Uhmane\Entities\Contatos::truncate();
        factory(\Uhmane\Entities\Contatos::class,10)->create();
    }
}
