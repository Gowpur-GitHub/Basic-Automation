<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Http\Requests\StorePenilaianRequest;
use App\Http\Requests\UpdatePenilaianRequest;
use App\Models\Alternatif;
use App\Models\SubKriteria;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
/*use App\Models\SubKriteria6;*/
use Illuminate\Support\Facades\Gate;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'SPK WP | Data Penilaian';
        $penilaians = Penilaian::get()->where('user_id', auth()->user()->id);

        return view('dashboard.penilaian.index', compact('title', 'penilaians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'SPK WP | Data Penilaian';
        $alternatifs = Alternatif::get()->where('user_id', auth()->user()->id);
        $C1s = SubKriteria::get()->where('user_id', auth()->user()->id);
        $C2s = SubKriteria1::get()->where('user_id', auth()->user()->id);
        $C3s = SubKriteria2::get()->where('user_id', auth()->user()->id);
        $C4s = SubKriteria3::get()->where('user_id', auth()->user()->id);
        $C5s = SubKriteria4::get()->where('user_id', auth()->user()->id);
        $C6s = SubKriteria5::get()->where('user_id', auth()->user()->id);
        /*$C7s = SubKriteria6::get()->where('user_id', auth()->user()->id);*/

    return view('dashboard.penilaian.create', compact('title', 'alternatifs', 'C1s', 'C2s', 'C3s', 'C4s', 'C5s', 'C6s' /*, 'C7s'*/ ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenilaianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenilaianRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['user_id'] = auth()->user()->id;

        Penilaian::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data Penilaian telah ditambahkan.');

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Penilaian $data_penilaian)
    {
        if (Gate::denies('penilaian', $data_penilaian)) {
            abort(403);
        }

        $title = 'SPK WP | Ubah Data Penilaian';
        $penilaian = $data_penilaian;
        $alternatifs = Alternatif::get()->where('user_id', auth()->user()->id);
        $C1s = SubKriteria::get()->where('user_id', auth()->user()->id);
        $C2s = SubKriteria1::get()->where('user_id', auth()->user()->id);
        $C3s = SubKriteria2::get()->where('user_id', auth()->user()->id);
        $C4s = SubKriteria3::get()->where('user_id', auth()->user()->id);
        $C5s = SubKriteria4::get()->where('user_id', auth()->user()->id);
        $C6s = SubKriteria5::get()->where('user_id', auth()->user()->id);
        /*$C7s = SubKriteria6::get()->where('user_id', auth()->user()->id);*/

    return view('dashboard.penilaian.edit', compact('title', 'penilaian', 'alternatifs', 'C1s', 'C2s', 'C3s', 'C4s', 'C5s', 'C6s' /*, 'C7s'*/ ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenilaianRequest  $request
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenilaianRequest $request, Penilaian $data_penilaian)
    {
        if (Gate::denies('penilaian', $data_penilaian)) {
            abort(403);
        }

        $validatedData = $request->validated();

        $validatedData['user_id'] = auth()->user()->id;

        Penilaian::where('id', $data_penilaian->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Penilaian telah diubah.');

        return redirect()->route('data-penilaian.index');
    }
}
