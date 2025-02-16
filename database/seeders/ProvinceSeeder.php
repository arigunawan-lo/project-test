<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinnces = [
            'Aceh', 
            'Bali',
            'Bangka Belitung',
            'Banten',
            'Bengkulu',
            'DKI Jakarta',
            'D.I Yogyakarta',
            'Gorontalo',
            'Jambi',
            'Jawa Barat',
            'Jawa Tengah',
            'Jawa Timur',
            'Kalimantan Barat',
            'Kalimantan Selatan',
            'Kalimantang Tengah',
            'Kalimantan Timur',
            'Kalimantan Utara',
            'Kepulauan Riau',
            'Lampung',
            'Maluku Utara',
            'Maluku',
            'Nusa Tenggara Barat',
            'Nusa Tenggara Timur',
            'Papua Barat Daya',
            'Papua Barat',
            'Papua Pegunungan',
            'Papua Selatan',
            'Papua Tengah',
            'Papua',
            'Riau',
            'Sulawesi Barat',
            'Sulawesi Selatan',
            'Sulawesi Tengah',
            'Sulawesi Tenggara',
            'Sulawesi Utara',
            'Sumatera Barat',
            'Sumatera Selatan',
            'Sumatera Utara'];
        foreach ($provinnces as $province) {
            Province::create(['name' => $province]);
        }
    }
}
