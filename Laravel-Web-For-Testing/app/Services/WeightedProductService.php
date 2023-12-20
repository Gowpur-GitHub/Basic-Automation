<?php

namespace App\Services;

use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Alternatif;
use App\Interfaces\WeightedProductInterface;

class WeightedProductService implements WeightedProductInterface
{
    public function calculate()
    {
        //* Perhitungan Normalisasi Bobot Kriteria W
        $kriterias = Kriteria::where('user_id', auth()->user()->id)->get();
        $totalBobot = $kriterias->sum('bobot');

        foreach ($kriterias as $kriteria) {
            if ($kriteria->jenis == 'cost') {
                $kriteria->w_normalisasi = ($kriteria->bobot / $totalBobot) * -1;
                $kriteria->save();
            } else {
                $kriteria->w_normalisasi = ($kriteria->bobot / $totalBobot) * 1;
                $kriteria->save();
            }
        }

        //* Perhitungan Nilai S
        $penilaians = Penilaian::where('user_id', auth()->user()->id)->get();
        $w_normalisasi = $kriterias->pluck('w_normalisasi');

        foreach ($penilaians as $penilaian) {

            $penilaian->C1_val = pow($penilaian->C1x, $w_normalisasi[0]);
            $penilaian->C2_val = pow($penilaian->C2x, $w_normalisasi[1]);
            $penilaian->C3_val = pow($penilaian->C3x, $w_normalisasi[2]);
            $penilaian->C4_val = pow($penilaian->C4x, $w_normalisasi[3]);
            $penilaian->C5_val = pow($penilaian->C5x, $w_normalisasi[4]);
            $penilaian->C6_val = pow($penilaian->C6x, $w_normalisasi[5]);
            /*$penilaian->C7_val = pow($penilaian->C7x, $w_normalisasi[6]);*/

            $penilaian->nilai_s = 

                $penilaian->C1_val *
                $penilaian->C2_val *
                $penilaian->C3_val *
                $penilaian->C4_val *
                $penilaian->C5_val *
                $penilaian->C6_val ;
                /*$penilaian->C7_val ;*/
                
            $penilaian->save();
        }

        //* Perhitungan Nilai V
        $total_nilai_s = $penilaians->sum('nilai_s');

        foreach ($penilaians as $penilaian) {
            $penilaian->nilai_v = $penilaian->nilai_s / $total_nilai_s;
            $penilaian->save();
        }

        return [$penilaians, $kriterias, $total_nilai_s];
    }

    public function getAllAlternatifs()
    {
        return Alternatif::where('user_id', auth()->user()->id)->get();
    }
}
