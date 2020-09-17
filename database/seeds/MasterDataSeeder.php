<?php

use App\Admin;
use App\User;
use App\Kelas;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            // 'nama_lengkap' => 'Administrator',
            'email' => 'admin@smpn26batanghari.id',
            'role' => 'admin',
            'password' => bcrypt('secret'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Admin::create([
            'user_id' => 1,
            'nama_admin' => 'Administrator',
        ]);

        Kelas::create([
            'nama_kelas' => '7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Kelas::create([
            'nama_kelas' => '8',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Kelas::create([
            'nama_kelas' => '9',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
