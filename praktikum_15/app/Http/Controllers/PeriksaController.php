<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Halaman Periksa"; 
        $author = "Eko Muchamad Haryono";
        $sub = "Periksa";
        $periksas = Periksa::with(['dokter', 'pasien'])->get();
        return view('periksa.index', compact('periksas', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Periksa";
        $author = "Eko Muchamad Haryono";
        $sub = "Periksa";
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('periksa.create', compact('title', 'author', 'sub', 'pasiens', 'dokters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'tensi' => 'required|string|max:50',
            'keterangan' => 'required|string',
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
        ]);

        Periksa::create($request->all());

        return redirect()->route('periksa.index')->with('success', 'Periksa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periksa $periksa)
    {
        $title = "Detail Data Periksa";
        $author = "Eko Muchamad Haryono";
        $sub = "Periksa";
        return view('periksa.show', compact('periksa', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periksa $periksa)
    {
        $title = "Edit Data Periksa";
        $author = "Eko Muchamad Haryono";
        $sub = "Periksa";
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('periksa.edit', compact('periksa', 'title', 'author', 'sub', 'pasiens', 'dokters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periksa $periksa)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'tensi' => 'required|string|max:50',
            'keterangan' => 'required|string',
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
        ]);

        $periksa->update($request->all());

        return redirect()->route('periksa.index')->with('success', 'Periksa updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periksa $periksa)
    {
        $periksa->delete();
        return redirect()->route('periksa.index')->with('success', 'Periksa deleted successfully.');
    }
}
