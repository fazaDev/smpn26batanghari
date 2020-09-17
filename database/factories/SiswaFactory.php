<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kelas;
use App\Siswa;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 2, $max = 15),
        'nisn' => $faker->nik,
        'nama_siswa' => $faker->name,
        'kelas_id' => $faker->numberBetween($min = 1, $max = 3),
        'jenis_kelamin' => 'Laki-laki',
        'tempat_lahir' => $faker->city,
        'tanggal_lahir' => '2000-01-01',
        'agama' => 'Islam',
        'alamat' => $faker->streetAddress,
    ];
});
