<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSubKriteria5Request;
use App\Models\SubKriteria5;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController5 extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria5  $subKriteria5
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria5 $data_sub_kriteria5)
    {
        if (Gate::denies('subkriteria5', $data_sub_kriteria5)) {
            abort(403);
        }

        $title = 'SPK WP | Ubah Data Sub Kriteria';
        $subkriteria = $data_sub_kriteria5;

        return view('dashboard.subKriteria.edit5', compact('title', 'subkriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria5  $subKriteria5
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubKriteria5Request $request, SubKriteria5 $data_sub_kriteria5)
    {
        if (Gate::denies('subkriteria5', $data_sub_kriteria5)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_sub_kriteria5->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:sub_kriteria5s'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria5::where('id', $data_sub_kriteria5->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }
}
