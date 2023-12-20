<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSubKriteria4Request;
use App\Models\SubKriteria4;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController4 extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria4  $subKriteria4
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria4 $data_sub_kriteria4)
    {
        if (Gate::denies('subkriteria4', $data_sub_kriteria4)) {
            abort(403);
        }

        $title = 'SPK WP | Ubah Data Sub Kriteria';
        $subkriteria = $data_sub_kriteria4;

        return view('dashboard.subKriteria.edit4', compact('title', 'subkriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria4  $subKriteria4
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubKriteria4Request $request, SubKriteria4 $data_sub_kriteria4)
    {
        if (Gate::denies('subkriteria4', $data_sub_kriteria4)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_sub_kriteria4->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:sub_kriteria4s'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria4::where('id', $data_sub_kriteria4->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }
}
