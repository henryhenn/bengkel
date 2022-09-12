<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spareparts = Sparepart::latest()->paginate(5);

        return view('Sparepart.index', compact('spareparts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sparepart.create');
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
            'nama_brg' => 'required|max:100',
            'jenis_brg' => 'required|max:50',
            'harga_brg' => 'required|numeric',
            'stok' => 'required|numeric'
        ]);

        Sparepart::create([
            'nama_brg' => $request->nama_brg,
            'jenis_brg' => $request->jenis_brg,
            'harga_brg' => $request->harga_brg,
            'stok' => $request->stok
        ]);
        return redirect()->route('sparepart.index')->with('message', 'Sparepart berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sparepart $sparepart)
    {
        return view('Sparepart.edit', compact('sparepart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sparepart $sparepart)
    {
        $this->validate($request, [
            'nama_brg' => 'required|max:100',
            'jenis_brg' => 'required|max:50',
            'harga_brg' => 'required|numeric',
            'stok' => 'required|numeric'
        ]);

        $sparepart->update([
            'nama_brg' => $request->nama_brg,
            'jenis_brg' => $request->jenis_brg,
            'harga_brg' => $request->harga_brg,
            'stok' => $request->stok
        ]);
        return redirect()->route('sparepart.index')->with('message', 'Data sparepart berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sparepart $sparepart)
    {
        $sparepart->delete();
        return redirect()->back()->with('message', 'Data sparepart berhasil dihapus!');
    }
}
