<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fakultas::orderByDesc('created_at')->get();

        return view('fakultas.list-fakultas', [
            'fakultas' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.add-fakultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'nama_fakultas' => ['required', 'max:100'],
            'nama_dekan' => ['required', 'max:100']
        ],
        [
            'nama_fakultas.required' => 'Nama Fakultas wajib diisi',
            'nama_fakultas.max' => 'Nama Fakultas maksimal 100 karakter',
            'nama_dekan.required' => 'Nama Dekan wajib diisi',
            'nama_dekan.max' => 'Nama Dekan maksimal 100 karakter'
        ]);
        Fakultas::create([
            'nama_fakultas' => $request->nama_fakultas,
            'nama_dekan' => $request->nama_dekan
        ]);

        return redirect('/fakultas')->with('success', 'Data fakultas berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {        
        return view('fakultas.detail-fakultas', [
            'fakultas' => $fakultas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        return view('fakultas.edit-fakultas', [
            'fakultas' => $fakultas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        $request->validate([
            'nama_fakultas' => ['required', 'max:5'],
            'nama_dekan' => ['required', 'max:5']
        ]);
        $fakultas->update([
            'nama_fakultas' => $request->nama_fakultas,
            'nama_dekan' => $request->nama_dekan
        ]);

        return redirect('/fakultas')->with('success', 'Data fakultas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        $fakultas->delete();
        return redirect()->back()->with('success', 'Data fakultas berhasil dihapus');
    }
}
