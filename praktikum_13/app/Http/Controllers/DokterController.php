<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\UnitKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Halaman Dokter"; 
        $sub ="Dokter";
        $author = "Eko Muchamad Haryono"; 
        // Retrieve all Dokters with their associated unit kerja
        $dokters = Dokter::with('unitkerja')->get();
        return view('dokter.index', compact('dokters', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Dokter";
        $sub = "Dokter";
        $author = "Eko Muchamad Haryono";
        $unitkerjas = UnitKerja::all();
        return view('dokter.create', compact('title', 'author', 'sub', 'unitkerjas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string|max:50',
            'gender' => 'required|string|max:1',
            'tmp_lahir' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'kategori' => 'required|string|max:50',
            'telpon' => 'required|string|max:50',
            'alamat' => 'required|string',
            'unitkerja_id' => 'required|integer|exists:unitkerjas,id',
        ]);

        // Create a new Dokter instance with the validated data
        $cek = Dokter::create($request->all());
        // dd($cek);

        // Redirect to the index page with a success message
        return redirect()->route('dokter.index')->with('success', 'Dokter created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        $title = "Detail Data Dokter";
        $author = "Eko Muchamad Haryono";
        $sub = "Dokter";
        return view('dokter.show', compact('dokter', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        $title = "Edit Data Dokter";
        $sub = "Dokter";
        $author = "Eko Muchamad Haryono";
        // Retrieve units from database
        $unitkerjas = UnitKerja::all();
        // Pass the Dokter instance to the view
        return view('dokter.edit', compact('dokter', 'title', 'author', 'sub', 'unitkerjas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'gender' => 'required|string|max:1',
            'tmp_lahir' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'kategori' => 'required|string|max:50',
            'telpon' => 'required|string|max:50',
            'alamat' => 'required|string',
            'unitkerja_id' => 'required|integer|exists:unitkerjas,id',
        ]);
    
        $dokter->update([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'kategori' => $request->kategori,
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'unitkerja_id' => $request->unitkerja_id,
        ]);
    
        return redirect()->route('dokter.index')->with('success', 'Dokter updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        try {
            // Begin a database transaction
            DB::beginTransaction();
    
            // Delete all related records in the `periksas` table
            $dokter->periksas()->delete();
    
            // Delete the `dokter` instance
            $dokter->delete();
    
            // Commit the transaction
            DB::commit();
    
            // Redirect to the index page with a success message
            return redirect()->route('dokter.index')->with('success', 'Dokter berhasil dihapus.');
        } catch (\Exception $e) {
            // Rollback the transaction if there is an error
            DB::rollback();
    
            // Redirect to the index page with an error message
            return redirect()->route('dokter.index')->with('error', 'Gagal menghapus Dokter: ' . $e->getMessage());
        }
    }
}
