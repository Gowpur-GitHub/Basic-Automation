<?php

namespace Database\Seeders;

use App\Models\Penilaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '1',
            'slug' => 'Viewsonic-Elite-XG270',
            'C1x' => '2',
            'C2x' => '2',
            'C3x' => '3',
            'C4x' => '5',
            'C5x' => '3',
            'C6x' => '4',
            /*'C7x' => '2',*/
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '2',
            'slug' => 'Philips-325M2CR2',
            'C1x' => '2',
            'C2x' => '3',
            'C3x' => '4',
            'C4x' => '3',
            'C5x' => '2',
            'C6x' => '4',
             /*'C7x' => '3',*/
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '3',
            'slug' => 'LG-27UL500-W',
            'C1x' => '2',
            'C2x' => '2',
            'C3x' => '5',
            'C4x' => '5',
            'C5x' => '1',
            'C6x' => '1',
             /*'C7x' => '2',*/
        ]);
        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '4',
            'slug' => 'Dell-P2422H',
            'C1x' => '2',
            'C2x' => '1',
            'C3x' => '3',
            'C4x' => '5',
            'C5x' => '1',
            'C6x' => '1',
             /*'C7x' => '2',*/
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '5',
            'slug' => 'MSI-Optix-G273',
            'C1x' => '2',
            'C2x' => '2',
            'C3x' => '3',
            'C4x' => '5',
            'C5x' => '2',
            'C6x' => '4',
             /*'C7x' => '4',*/
        ]);

        Penilaian::create([
            'user_id' => '1',
            'alternatif_id' => '6',
            'slug' => 'Samsung-Odyssey-G5',
            'C1x' => '2',
            'C2x' => '2',
            'C3x' => '3',
            'C4x' => '3',
            'C5x' => '2',
            'C6x' => '4',
             /*'C7x' => '1',*/
        ]);
    }
}
