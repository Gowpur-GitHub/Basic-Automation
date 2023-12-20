<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Penilaian;

class DataHasilAkhirController extends Controller
{
    public function index()
    {
        $penilaians = Penilaian::where('user_id', auth()->user()->id)->get();

        $alternatifs = Alternatif::where('user_id', auth()->user()->id)->get();

        $title = 'SPK WP | Data Hasil akhir';

        if ($penilaians->isEmpty() || $alternatifs->isEmpty()) {
            return view('dashboard.hasilAkhir.empty', compact('title'));
        }

        $rankingWP = $penilaians->sortByDesc('nilai_v');

        return view('dashboard.hasilAkhir.index', compact('title', 'rankingWP'));
    }

    public function printDataHasil()
    {
        $rangkingWP = Penilaian::where('user_id', auth()->user()->id)->get()->sortByDesc('nilai_v');

        $pdf = PDF::loadview('dashboard.hasilAkhir.printDataHasil', ['penilaians' => $rangkingWP])->setPaper('a4', 'landscape');

        return $pdf->stream();
    }
}
