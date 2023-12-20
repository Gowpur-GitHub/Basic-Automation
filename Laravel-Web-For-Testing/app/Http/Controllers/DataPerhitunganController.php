<?php

namespace App\Http\Controllers;

use App\Services\WeightedProductService;

class DataPerhitunganController extends Controller
{
    public function index()
    {
        $title = 'SPK WP | Data Perhitungan';

        return view('dashboard.perhitungan.index', compact('title'));
    }

    public function hitung(WeightedProductService $weightedProduct)
    {
        $title = 'SPK WP | Data Perhitungan';

        $alternatifs = $weightedProduct->getAllAlternatifs();

        list($penilaians, $kriterias, $total_nilai_s) = $weightedProduct->calculate();

        if ($penilaians->isEmpty() || $alternatifs->isEmpty()) {
            return view('dashboard.perhitungan.empty', compact('title'));
        } else {
            return view('dashboard.perhitungan.result', compact('title', 'penilaians', 'kriterias', 'total_nilai_s'));
        }
    }
}
