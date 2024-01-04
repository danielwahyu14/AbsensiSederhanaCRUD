<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Mahasiswa::class, static function (Faker\Generator $faker) {
    return [
        'nim' => $faker->sentence,
        'nama' => $faker->sentence,
        'umur' => $faker->randomNumber(5),
        'alamat' => $faker->sentence,
        'email' => $faker->email,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
