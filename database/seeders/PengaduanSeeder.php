<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $unitIds = DB::table('tb_unit_kerja')->pluck('id_unit_kerja')->toArray();

        if (empty($unitIds)) {
            $this->command->info('Data unit kerja tidak ditemukan. Pastikan tabel tb_unit_kerja telah terisi.');
            return;
        }

        for ($i = 0; $i < 20; $i++) {
            DB::table('tb_pengaduan')->insert([
                'id_unit_kerja'     => $faker->randomElement($unitIds),
                'no_medrec'         => $faker->numerify('MR####'),
                'nama_lengkap'      => $faker->name,
                'email'             => $faker->unique()->safeEmail,
                'nomor_telephone'   => $faker->phoneNumber,
                'pengaduan'         => $faker->sentence(10),
                'permasalahan'      => $faker->sentence(10),
                'grading'           => $faker->randomElement(['A', 'B', 'C', 'D']),
                'klarifikasi'       => $faker->sentence(10),
                'file_pengaduan'    => $faker->word . '.pdf',
                'file_evaluasi'     => $faker->word . '.pdf',
                'status_pengaduan'  => $faker->randomElement(['Menunggu', 'Diproses', 'Selesai']),
                'tgl_selesai'       => $faker->date('Y-m-d'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);
        }
    }
}
