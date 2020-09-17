<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MasterDataSeeder::class);
        // $this->call(SiswaSeeder::class);
        // $this->call(OrangTuaSeeder::class);
        // $this->call(GuruSeeder::class);
    }
}
