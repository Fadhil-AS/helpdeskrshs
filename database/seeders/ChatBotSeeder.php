<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChatBotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua id_chat dari tabel tb_chat
        $chatIds = DB::table('tb_chat')->pluck('id_chat')->toArray();

        // Pastikan ada data di tb_chat, jika tidak, seeder tidak akan dijalankan.
        if (empty($chatIds)) {
            $this->command->info('Data tb_chat tidak ditemukan. Pastikan Anda sudah mengisi tabel tb_chat terlebih dahulu.');
            return;
        }

        DB::table('tb_chatbot')->insert([
            // ---------------------------------------
            // 03-03-2025 (SENIN) - ANESTESIOLOGI
            // ---------------------------------------
            [
                'id_chat'      => $chatIds[array_rand($chatIds)],
                'tgl_cluster'  => '2025-03-03',
                'hari_cluster' => 'SENIN',
                'ksm'          => 'ANESTESIOLOGI',
                'poli'         => 'KLINIK ANESTESI & TERAPI NYERI',
                'cluster'      => 'CLUSTER 1 (PAGI 07:30 - 11:00)',
                'dokter'       => 'Dr. dr. Erwin Pradian Sp.An.,KIC.,KAR.,M.Kes',
                'quota'        => '20',
                'informasi'    => 'KAMAR : DEFAULT dan MEJA :1',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            // ---------------------------------------
            // 04-03-2025 (SELASA) - ANESTESIOLOGI
            // ---------------------------------------
            [
                'id_chat'      => $chatIds[array_rand($chatIds)],
                'tgl_cluster'  => '2025-03-04',
                'hari_cluster' => 'SELASA',
                'ksm'          => 'ANESTESIOLOGI',
                'poli'         => 'KLINIK ANESTESI & TERAPI NYERI',
                'cluster'      => 'CLUSTER 1 (PAGI 07:30 - 11:00)',
                'dokter'       => 'dr. Nurita Dian Kestriani S.S, Sp.An.,KIC',
                'quota'        => '20',
                'informasi'    => 'KAMAR : DEFAULT dan MEJA :1',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            // ---------------------------------------
            // 05-03-2025 (RABU) - ANESTESIOLOGI
            // ---------------------------------------
            [
                'id_chat'      => $chatIds[array_rand($chatIds)],
                'tgl_cluster'  => '2025-03-05',
                'hari_cluster' => 'RABU',
                'ksm'          => 'ANESTESIOLOGI',
                'poli'         => 'KLINIK ANESTESI & TERAPI NYERI',
                'cluster'      => 'CLUSTER 1 (PAGI 07:30 - 11:00)',
                'dokter'       => 'dr. Mohamad Andy Prihartono, Sp.An.,KMN.,M.Kes.',
                'quota'        => '20',
                'informasi'    => 'KAMAR : DEFAULT dan MEJA :1',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            // ---------------------------------------
            // 06-03-2025 (KAMIS) - ANESTESIOLOGI
            // ---------------------------------------
            [
                'id_chat'      => $chatIds[array_rand($chatIds)],
                'tgl_cluster'  => '2025-03-06',
                'hari_cluster' => 'KAMIS',
                'ksm'          => 'ANESTESIOLOGI',
                'poli'         => 'KLINIK ANESTESI & TERAPI NYERI',
                'cluster'      => 'CLUSTER 1 (PAGI 07:30 - 11:00)',
                'dokter'       => 'dr. Ezra Oktaliansah, Sp.An.,KIC.,KAP.,M.Kes.',
                'quota'        => '20',
                'informasi'    => 'KAMAR : DEFAULT dan MEJA :1',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            // ---------------------------------------
            // 07-03-2025 (JUMAT) - ANESTESIOLOGI
            // ---------------------------------------
            [
                'id_chat'      => $chatIds[array_rand($chatIds)],
                'tgl_cluster'  => '2025-03-07',
                'hari_cluster' => 'SENIN',
                'ksm'          => 'ANESTESIOLOGI',
                'poli'         => 'KLINIK ANESTESI & TERAPI NYERI',
                'cluster'      => 'CLUSTER 1 (PAGI 07:30 - 11:00)',
                'dokter'       => 'dr. Muchammad Erias Erlangga, Sp.An.',
                'quota'        => '20',
                'informasi'    => 'KAMAR : DEFAULT dan MEJA :1',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],
            // ---------------------------------------
            // 10-03-2025 (SENIN) - ANESTESIOLOGI
            // ---------------------------------------
            [
                'id_chat'      => $chatIds[array_rand($chatIds)],
                'tgl_cluster'  => '2025-03-10',
                'hari_cluster' => 'SENIN',
                'ksm'          => 'ANESTESIOLOGI',
                'poli'         => 'KLINIK ANESTESI & TERAPI NYERI',
                'cluster'      => 'CLUSTER 1 (PAGI 07:30 - 11:00)',
                'dokter'       => 'dr. Nurita Dian Kestriani S.S, Sp.An.,KIC',
                'quota'        => '20',
                'informasi'    => 'KAMAR : DEFAULT dan MEJA :1',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],

        ]);
    }
}
