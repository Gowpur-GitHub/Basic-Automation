<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Http\Requests\UpdateKriteriaRequest;
use Illuminate\Support\Facades\Gate;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'SPK WP | Data Kriteria';
        $kriterias = Kriteria::get()->where('user_id', auth()->user()->id);

        return view('dashboard.kriteria.index', compact('title', 'kriterias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $data_kriterium)
    {
        if (Gate::denies('kriteria', $data_kriterium)) {
            abort(403);
        }

        $title = 'SPK WP | Ubah Data Kriteria';
        $kriteria = $data_kriterium;

        return view('dashboard.kriteria.edit', compact('title', 'kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKriteriaRequest  $request
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKriteriaRequest $request, Kriteria $data_kriterium)
    {
        if (Gate::denies('kriteria', $data_kriterium)) {
            abort(403);
        }

        $validatedData = $request->validated();

        if ($request->slug != $data_kriterium->slug) {
            $req = $request->validate([
                'slug' => 'required|unique:kriterias'
            ]);

            $validatedData['slug'] = $req['slug'];
        }

        $validatedData['user_id'] = auth()->user()->id;

        Kriteria::where('id', $data_kriterium->id)->update($validatedData);

        alert()->success('Ubah Data Sukses!', 'Data Kriteria telah diubah.');

        return redirect('/dashboard/data-kriteria');
    }
}
