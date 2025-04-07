<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class OperatorUnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('tb_operator_unit_kerja')->insert([
                'nama_lengkap'    => $faker->name,
                'email'           => $faker->unique()->safeEmail,
                'nomor_telephone' => $faker->phoneNumber,
                'created_at'      => Carbon::now(),
                'updated_at'      => Carbon::now(),
            ]);
        }
    }
}
