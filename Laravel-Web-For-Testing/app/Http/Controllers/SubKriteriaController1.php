<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSubKriteria1Request;
use App\Models\SubKriteria1;
use Illuminate\Support\Facades\Gate;

class SubKriteriaController1 extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubKriteria1  $subKriteria1
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKriteria1 $data_sub_kriteria1)
    {
        if (Gate::denies('subkriteria1', $data_sub_kriteria1)) {
            abort(403);
        }

        $title = 'SPK WP | Ubah Data Sub Kriteria';
        $subkriteria = $data_sub_kriteria1;

        return view('dashboard.subKriteria.edit1', compact('title', 'subkriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubKriteria1  $subKriteria1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubKriteria1Request $request, SubKriteria1 $data_sub_kriteria1)
    {
        if (Gate::denies('subkriteria1', $data_sub_kriteria1)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_sub_kriteria1->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:sub_kriteria1s'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        SubKriteria1::where('id', $data_sub_kriteria1->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Sub Kriteria telah diubah.');

        return redirect('/dashboard/data-sub-kriteria');
    }
}
