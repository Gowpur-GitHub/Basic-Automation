<?php

namespace App\Http\Controllers;

use App\Services\WeightedProductService;

class HomeController extends Controller
{
    public function index(WeightedProductService $weightedProduct)
    {
        $title = 'SPK WP | Dashboard';

        list($penilaians, $kriterias) = $weightedProduct->calculate();

        $dataPenilaians = $penilaians->sortBy('nilai_v');
        $formattedUpdatedAt = $dataPenilaians->isEmpty() ? 'Data Kosong' : $dataPenilaians->first()->getFormattedUpdatedAt();

        $dataKriterias = $kriterias;
        $formattedUpdatedAtKriteria = $dataKriterias->first()->getFormattedUpdatedAt();

        $dataKriteriaNama = $dataKriterias->pluck('namaKriteria');
        $dataKriteriaBobot = $dataKriterias->pluck('bobot');

        $dataNilaiV = $dataPenilaians->pluck('nilai_v');
        $dataNamaAlternatif = $dataPenilaians->pluck('alternatif.namaAlternatif');

        return view('dashboard.index', compact(
            'title',
            'dataKriteriaNama',
            'dataKriteriaBobot',
            'formattedUpdatedAtKriteria',
            'dataNamaAlternatif',
            'dataNilaiV',
            'formattedUpdatedAt',
        ));
    }

    public function cover()
    {
        $title = 'SPK WP | Welcome';

        return view('cover', compact('title'));
    }
}

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Tambahkan link favicon di sini -->
    <link rel="icon" type="image/x-icon" href="img/LogoTittle.svg">
    <title> SPK WP | Welcome </title>
</head>
<body>

</body>
</html>
