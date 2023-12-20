<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSubKriteria2Request;
use App\Models\SubKriteria2;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController2 extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria2  $subKriteria2
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria2 $data_sub_kriteria2)
    {
        if (Gate::denies('subkriteria2', $data_sub_kriteria2)) {
            abort(403);
        }

        $title = 'SPK WP | Ubah Data Sub Kriteria';
        $subkriteria = $data_sub_kriteria2;

        return view('dashboard.subKriteria.edit2', compact('title', 'subkriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria2  $subKriteria2
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubKriteria2Request $request, SubKriteria2 $data_sub_kriteria2)
    {
        if (Gate::denies('subkriteria2', $data_sub_kriteria2)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_sub_kriteria2->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:sub_kriteria2s'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria2::where('id', $data_sub_kriteria2->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }
}
