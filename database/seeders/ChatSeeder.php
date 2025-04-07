<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $pengaduanIds = DB::table('tb_pengaduan')->pluck('id_pengaduan')->toArray();

        if (empty($pengaduanIds)) {
            $this->command->info('Data pengaduan tidak ditemukan. Pastikan tabel tb_pengaduan telah terisi.');
            return;
        }

        for ($i = 0; $i < 20; $i++) {
            DB::table('tb_chat')->insert([
                'id_pengaduan' => $faker->randomElement($pengaduanIds),
                'pertanyaan'   => $faker->sentence(8),
                'jawaban'      => $faker->sentence(10),
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ]);
        }

    }
}
