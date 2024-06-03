<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Halaman Unit Kerja";
        $sub = "Unit Kerja";
        $author = "Eko Muchamad Haryono";
        // Retrieve all UnitKerja records
        $unitkerjas = UnitKerja::all();
        return view('unitkerja.index', compact('unitkerjas', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Unit Kerja";
        $sub = "Unit Kerja";
        $author = "Eko Muchamad Haryono";
        return view('unitkerja.create', compact('title', 'author', 'sub'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string|max:50',
        ]);

        // Create a new UnitKerja instance with the validated data
        UnitKerja::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('unitkerja.index')->with('success', 'Unit Kerja created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UnitKerja $unitkerja)
    {
        $title = "Detail Data Unit Kerja";
        $author = "Eko Muchamad Haryono";
        $sub = "Unit Kerja";
        return view('unitkerja.show', compact('unitkerja', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnitKerja $unit_kerja)
    {
        $title = "Edit Data Unit Kerja";
        $sub = "Unit Kerja";
        $author = "Eko Muchamad Haryono";
        // dd($unitkerja);
        return view('unitkerja.edit', compact('unit_kerja', 'title', 'author', 'sub'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnitKerja $unit_kerja)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string|max:50',
        ]);

        // Update the UnitKerja instance with the validated data
        $unit_kerja->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('unit_kerja.index')->with('success', 'Unit Kerja updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnitKerja $unitkerja)
    {
        try {
            // Begin a database transaction
            DB::beginTransaction();
    
            // Delete all related records in the `dokters` table
            $unitkerja->dokters()->delete(); // Menghapus semua dokter terkait
    
            // Delete the `unitkerja` instance
            $unitkerja->delete();
    
            // Commit the transaction
            DB::commit();
    
            // Redirect to the index page with a success message
            return redirect()->route('unit_kerja.index')->with('success', 'Unit Kerja berhasil dihapus.');
        } catch (\Exception $e) {
            // Rollback the transaction if there is an error
            DB::rollback();
    
            // Redirect to the index page with an error message
            return redirect()->route('unit_kerja.index')->with('error', 'Gagal menghapus Unit Kerja: ' . $e->getMessage());
        }
    }
}
