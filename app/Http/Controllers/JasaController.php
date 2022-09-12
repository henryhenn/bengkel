<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jasa = Jasa::latest()->paginate(5);
        return view('Jasa.index', compact('jasa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jasa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:100',
            'jenis' => 'required|max:50',
            'harga' => 'required'
        ]);

        Jasa::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga
        ]);

        return redirect()->route('jasa.index')->with('message', 'Data jasa berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Jasa $jasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Jasa $jasa)
    {
        return view('Jasa.edit', compact('jasa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Jasa $jasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jasa $jasa)
    {
        $this->validate($request, [
            'nama' => 'required|max:100',
            'jenis' => 'required|max:50',
            'harga' => 'required'
        ]);

        $jasa->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga
        ]);

        return redirect()->route('jasa.index')->with('message', 'Data jasa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Jasa $jasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jasa $jasa)
    {
        $jasa->delete();
        return redirect()->back()->with('message', 'Data jasa berhasil dihapus!');
    }
}
