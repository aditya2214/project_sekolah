<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\DataMurid::class, function (Faker $faker) {
    return [
        //
        'nama_murid'=> $faker->word,
        'NISN'=> $faker->randomDigit,
        'NIS'=> $faker->randomDigit,
        'tempat_lahir'=> 'Karawang',
        'tanggal_lahir'=> $faker->date(),
        'id_kelas'=> $faker->randomElement([1,2,3,4,5,6]),
        'nama_ortu'=>$faker->word,
        'alamat'=> $faker->address,
        'no_tlp'=> $faker->randomDigit
    ];
});
