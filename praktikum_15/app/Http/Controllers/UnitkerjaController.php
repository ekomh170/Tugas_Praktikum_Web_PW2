<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\UnitKerja;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UnitkerjaController extends Controller
{
    public function index()
    {
        $title = "Halaman Unit Kerja";
        $sub = "Unit Kerja";
        $author = "Eko Muchamad Haryono";
        // Retrieve all UnitKerja records
        $unitkerjas = UnitKerja::all();
        return view('unitkerja.index', compact('unitkerjas', 'title', 'author', 'sub'));
    }

    public function create()
    {
        $title = "Tambah Data Unit Kerja";
        $sub = "Unit Kerja";
        $author = "Eko Muchamad Haryono";
        return view('unitkerja.create', compact('title', 'author', 'sub'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string|max:50',
        ]);

        // Create a new UnitKerja instance with the validated data
        UnitKerja::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('unitkerjas.index')->with('success', 'Unit Kerja created successfully.');
    }

    public function show(UnitKerja $unitkerja)
    {
        $title = "Detail Data Unit Kerja";
        $author = "Eko Muchamad Haryono";
        $sub = "Unit Kerja";
        return view('unitkerja.show', compact('unitkerja', 'title', 'author', 'sub'));
    }

    public function edit(UnitKerja $unitkerja)
    {
        $title = "Edit Data Unit Kerja";
        $sub = "Unit Kerja";
        $author = "Eko Muchamad Haryono";
        return view('unitkerja.edit', compact('unitkerja', 'title', 'author', 'sub'));
    }

    public function update(Request $request, UnitKerja $unitkerja)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string|max:50',
        ]);

        // Update the UnitKerja instance with the validated data
        $unitkerja->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('unitkerjas.index')->with('success', 'Unit Kerja updated successfully.');
    }

    public function destroy(UnitKerja $unitkerja)
    {
        try {
            // Memulai transaksi database
            DB::beginTransaction();
    
            // Mengambil koleksi pasien yang memiliki kelurahan_id tertentu
            $pasiens = Dokter::where('unitkerja_id', $unitkerja->id)->get();
    
            // Menghapus setiap pasien dalam koleksi
            foreach ($pasiens as $pasien) {
                // Menghapus semua record terkait di tabel `periksas`
                $pasien->periksas()->delete();
                // Menghapus instance Pasien
                $pasien->delete();
            }
    
            // Menghapus data Kelurahan
            $unitkerja->delete();
    
            // Menyimpan transaksi
            DB::commit();
    
            // Redirect kembali ke halaman index dengan pesan sukses
            return redirect()->route('unitkerjas.index')->with('success', 'Kelurahan berhasil dihapus.');
        } catch (\Exception $e) {
            // Membatalkan transaksi jika terjadi kesalahan
            DB::rollback();
    
            // Redirect kembali ke halaman index dengan pesan error
            return redirect()->route('unitkerjas.index')->with('error', 'Gagal menghapus Kelurahan: ' . $e->getMessage());
        }
    }
}
