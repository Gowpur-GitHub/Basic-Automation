<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria;
use App\Http\Requests\UpdateSubKriteriaRequest;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
/*use App\Models\SubKriteria6;*/
use Illuminate\Support\Facades\Gate;

class SubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'SPK WP | Data Sub Kriteria';
        $sub_kriterias = SubKriteria::get()->where('user_id', auth()->user()->id);
        $sub_kriteria1s = SubKriteria1::get()->where('user_id', auth()->user()->id);
        $sub_kriteria2s = SubKriteria2::get()->where('user_id', auth()->user()->id);
        $sub_kriteria3s = SubKriteria3::get()->where('user_id', auth()->user()->id);
        $sub_kriteria4s = SubKriteria4::get()->where('user_id', auth()->user()->id);
        $sub_kriteria5s = SubKriteria5::get()->where('user_id', auth()->user()->id);
        

        return view('dashboard.subKriteria.index', compact(
            'title',
            'sub_kriterias',
            'sub_kriteria1s',
            'sub_kriteria2s',
            'sub_kriteria3s',
            'sub_kriteria4s',
            'sub_kriteria5s'
            /* 'sub_kriteria6s' */
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria  $subKriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria $data_sub_kriterium)
    {
        if (Gate::denies('subkriteria', $data_sub_kriterium)) {
            abort(403);
        }

        $title = 'SPK WP | Ubah Data Sub Kriteria';
        $subkriteria = $data_sub_kriterium;

        return view('dashboard.subKriteria.edit', compact('title', 'subkriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubKriteriaRequest  $request
     * @param  \App\Models\SubKriteria  $subKriteria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubKriteriaRequest $request, SubKriteria $data_sub_kriterium)
    {
        if (Gate::denies('subkriteria', $data_sub_kriterium)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_sub_kriterium->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:sub_kriterias'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria::where('id', $data_sub_kriterium->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }
}
