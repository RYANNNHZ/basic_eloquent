<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for($i = 0 ; $i < 50; $i++){
        $faker = Faker::create('id_ID');
        DB::table('siswa')->insert([
            'nama' => $faker->name,
            'umur' => $faker->numberBetween(20,35),
        ]);
    }
    }
}
