<?php

use Illuminate\Database\Seeder;

class OrangTuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ortu = factory(\App\OrangTua::class, 50)->make();
    }
}
