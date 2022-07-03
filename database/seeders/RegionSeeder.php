<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['province'=>'Aceh', 'city'=>'Banda Aceh'],
            ['province'=>'Aceh', 'city'=>'Langsa'],
            ['province'=>'Aceh', 'city'=>'Lhokseumawe'],
            ['province'=>'Aceh', 'city'=>'Sabang'],
            ['province'=>'Aceh', 'city'=>'Subulussalam'],
            ['province'=>'Bali', 'city'=>'Denpasar'],
            ['province'=>'Bangka Belitung', 'city'=>'Pangkalpinang'],
            ['province'=>'Banten', 'city'=>'Cilegon'],
            ['province'=>'Banten', 'city'=>'Serang'],
            ['province'=>'Banten', 'city'=>'Tangerang'],
            ['province'=>'Banten', 'city'=>'Tangerang Selatan'],
            ['province'=>'Bengkulu', 'city'=>'Bengkulu'],
            ['province'=>'Daerah Istimewa Yogyakarta', 'city'=>'Yogyakarta'],
            ['province'=>'Gorontalo', 'city'=>'Gorontalo'],
            ['province'=>'DKI Jakarta', 'city'=>'Jakarta Barat'],
            ['province'=>'DKI Jakarta', 'city'=>'Jakarta Pusat'],
            ['province'=>'DKI Jakarta', 'city'=>'Jakarta Selatan'],
            ['province'=>'DKI Jakarta', 'city'=>'Jakarta Timur'],
            ['province'=>'DKI Jakarta', 'city'=>'Jakarta Utara'],
            ['province'=>'Jambi', 'city'=>'Jambi'],
            ['province'=>'Jambi', 'city'=>'Sungai Penuh'],
            ['province'=>'Jawa Barat', 'city'=>'Bandung'],
            ['province'=>'Jawa Barat', 'city'=>'Bekasi'],
            ['province'=>'Jawa Barat', 'city'=>'Bogor'],
            ['province'=>'Jawa Barat', 'city'=>'Cimahi'],
            ['province'=>'Jawa Barat', 'city'=>'Cirebon'],
            ['province'=>'Jawa Barat', 'city'=>'Depok'],
            ['province'=>'Jawa Barat', 'city'=>'Sukabumi'],
            ['province'=>'Jawa Barat', 'city'=>'Tasikmalaya'],
            ['province'=>'Jawa Barat', 'city'=>'Banjar'],
            ['province'=>'Jawa Tengah', 'city'=>'Magelang'],
            ['province'=>'Jawa Tengah', 'city'=>'Pekalongan'],
            ['province'=>'Jawa Tengah', 'city'=>'Salatiga'],
            ['province'=>'Jawa Tengah', 'city'=>'Semarang'],
            ['province'=>'Jawa Tengah', 'city'=>'Surakarta'],
            ['province'=>'Jawa Tengah', 'city'=>'Tegal'],
            ['province'=>'Jawa Timur', 'city'=>'Batu'],
            ['province'=>'Jawa Timur', 'city'=>'Blitas'],
            ['province'=>'Jawa Timur', 'city'=>'Kediri'],
            ['province'=>'Jawa Timur', 'city'=>'Madiun'],
            ['province'=>'Jawa Timur', 'city'=>'Malang'],
            ['province'=>'Jawa Timur', 'city'=>'Mojokerto'],
            ['province'=>'Jawa Timur', 'city'=>'Pasuruan'],
            ['province'=>'Jawa Timur', 'city'=>'Probolinggo'],
            ['province'=>'Jawa Timur', 'city'=>'Surabaya'],
            ['province'=>'Kalimantan Barat', 'city'=>'Pontianak'],
            ['province'=>'Kalimantan Barat', 'city'=>'Singkawang'],
            ['province'=>'Kalimantan Selatan', 'city'=>'Banjarbaru'],
            ['province'=>'Kalimantan Selatan', 'city'=>'Banjarmasin'],
            ['province'=>'Kalimantan Tengah', 'city'=>'Palangka Raya'],
            ['province'=>'Kalimantan Timur', 'city'=>'Balikpapan'],
            ['province'=>'Kalimantan Timur', 'city'=>'Bontang'],
            ['province'=>'Kalimantan Timur', 'city'=>'Samarinda'],
            ['province'=>'Kalimantan Utara', 'city'=>'Tarakan'],
            ['province'=>'Kepulauan Riau', 'city'=>'Batam'],
            ['province'=>'Kepulauan Riau', 'city'=>'Tanjungpinang'],
            ['province'=>'Lampung', 'city'=>'Bandar Lampung'],
            ['province'=>'Lampung', 'city'=>'Metro'],
            ['province'=>'Maluku Utara', 'city'=>'Ternate'],
            ['province'=>'Maluku Utara', 'city'=>'Tidore Kepulauan'],
            ['province'=>'Maluku', 'city'=>'Ambon'],
            ['province'=>'Maluku', 'city'=>'Tual'],
            ['province'=>'Nusa Tenggara Barat', 'city'=>'Bima'],
            ['province'=>'Nusa Tenggara Barat', 'city'=>'Mataram'],
            ['province'=>'Nusa Tenggara Timur', 'city'=>'Kupang'],
            ['province'=>'Papua Barat', 'city'=>'Sorong'],
            ['province'=>'Papua', 'city'=>'Jayapura'],
            ['province'=>'Riau', 'city'=>'Dumai'],
            ['province'=>'Riau', 'city'=>'Pekanbaru'],
            ['province'=>'Sulawesi Selatan', 'city'=>'Makassar'],
            ['province'=>'Sulawesi Selatan', 'city'=>'Palopo'],
            ['province'=>'Sulawesi Selatan', 'city'=>'Parepare'],
            ['province'=>'Sulawesi Tengah', 'city'=>'Palu'],
            ['province'=>'Sulawesi Tenggara', 'city'=>'Baubau'],
            ['province'=>'Sulawesi Tenggara', 'city'=>'Kendari'],
            ['province'=>'Sulawesi Utara', 'city'=>'Bitung'],
            ['province'=>'Sulawesi Utara', 'city'=>'Kotamobagu'],
            ['province'=>'Sulawesi Utara', 'city'=>'Manado'],
            ['province'=>'Sulawesi Utara', 'city'=>'Tomohon'],
            ['province'=>'Sumatra Barat', 'city'=>'Bukittinggi'],
            ['province'=>'Sumatra Barat', 'city'=>'Padang'],
            ['province'=>'Sumatra Barat', 'city'=>'Padang Panjang'],
            ['province'=>'Sumatra Barat', 'city'=>'Pariaman'],
            ['province'=>'Sumatra Barat', 'city'=>'Payakumbuh'],
            ['province'=>'Sumatra Barat', 'city'=>'Sawahlunto'],
            ['province'=>'Sumatra Barat', 'city'=>'Solok'],
            ['province'=>'Sumatra Selatan', 'city'=>'Lubuklinggau'],
            ['province'=>'Sumatra Selatan', 'city'=>'Pagar Alam'],
            ['province'=>'Sumatra Selatan', 'city'=>'Palembang'],
            ['province'=>'Sumatra Selatan', 'city'=>'Prabumulih'],
            ['province'=>'Sumatra Utara', 'city'=>'Binjai'],
            ['province'=>'Sumatra Utara', 'city'=>'Gunungsitoli'],
            ['province'=>'Sumatra Utara', 'city'=>'Medan'],
            ['province'=>'Sumatra Utara', 'city'=>'Padangsidimpuan'],
            ['province'=>'Sumatra Utara', 'city'=>'Pematangsiantar'],
            ['province'=>'Sumatra Utara', 'city'=>'Sibolga'],
            ['province'=>'Sumatra Utara', 'city'=>'Tanjungbalai'],
            ['province'=>'Sumatra Utara', 'city'=>'Tebing Tinggi'],
        ]);
    }
}
