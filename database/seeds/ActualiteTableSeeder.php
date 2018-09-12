<?php

use Illuminate\Database\Seeder;

class ActualiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Actualite::class, 15)->create();
    }
}
