<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $operatorIds = DB::table('tb_operator_unit_kerja')
                            ->pluck('id_operator_unit_kerja')
                            ->toArray();

        if (empty($operatorIds)) {
            $this->command->info('Data operator belum ada, pastikan tb_operator_unit_kerja sudah diisi.');
            return;
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('tb_unit_kerja')->insert([
                'id_operator_unit_kerja' => $faker->randomElement($operatorIds),
                'nama_bagian'            => $faker->randomElement(['Bagian Administrasi', 'Bagian Keuangan', 'Bagian HRD', 'Bagian IT']),
                'status_unit_kerja'      => $faker->randomElement(['Aktif', 'Tidak Aktif']),
                'created_at'             => Carbon::now(),
                'updated_at'             => Carbon::now(),
            ]);
        }
    }
}
