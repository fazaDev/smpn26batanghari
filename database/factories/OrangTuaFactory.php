<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrangTua;
use App\Siswa;
use Faker\Generator as Faker;

$factory->define(OrangTua::class, function (Faker $faker) {
    return [
        'nama_ortu' => $faker->name,
        'siswa_id' => $faker->numberBetween($min = 1, $max = 100),
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('rahasia'),
    ];
});
