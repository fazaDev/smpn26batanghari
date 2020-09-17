<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guru;
use Faker\Generator as Faker;

$factory->define(Guru::class, function (Faker $faker) {
    return [
        'nip' => $faker->nik,
        'nama_guru' => $faker->name,
        'jenis_kelamin' => 'Laki-laki',
        'tempat_lahir' => $faker->city,
        'tanggal_lahir' => '1985-01-01',
        'agama' => 'Islam',
        'alamat' => $faker->streetAddress,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('rahasia'),
    ];
});
