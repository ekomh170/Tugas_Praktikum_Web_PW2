<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Pasien;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Daftar Kelurahan";
        $author = "Eko Muchamad Haryono";
        $sub = "Kelurahan";
        $kelurahans = Kelurahan::with('pasien')->get();
        return view('kelurahan.index', compact('kelurahans', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Daftar Kelurahan";
        $author = "Eko Muchamad Haryono";
        $sub = "Kelurahan";
        return view('kelurahan.create', compact('title', 'author', 'sub'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kecamatan_id' => 'required',
        ]);

        Kelurahan::create($request->all());
        return redirect()->route('kelurahans.index')->with('success', 'Kelurahan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelurahan $kelurahan)
    {
        $title = "Daftar Kelurahan";
        $author = "Eko Muchamad Haryono";
        $sub = "Kelurahan";

        // Mengambil data kelurahan berdasarkan $kelurahan->id
        $kelurahan = Kelurahan::with('pasien')->find($kelurahan->id);


        return view('kelurahan.show', compact('kelurahan', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelurahan $kelurahan)
    {
        $title = "Daftar Kelurahan";
        $author = "Eko Muchamad Haryono";
        $sub = "Kelurahan";

        return view('kelurahan.edit', compact('kelurahan', 'title', 'author', 'sub'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        $request->validate([
            'nama' => 'required',
            'kecamatan_id' => 'required',
        ]);

        $kelurahan->update($request->all());
        return redirect()->route('kelurahans.index')->with('success', 'Kelurahan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelurahan $kelurahan)
{
    try {
        // Memulai transaksi database
        DB::beginTransaction();

        // Mengambil koleksi pasien yang memiliki kelurahan_id tertentu
        $pasiens = Pasien::where('kelurahan_id', $kelurahan->id)->get();

        // Menghapus setiap pasien dalam koleksi
        foreach ($pasiens as $pasien) {
            // Menghapus semua record terkait di tabel `periksas`
            $pasien->periksas()->delete();
            // Menghapus instance Pasien
            $pasien->delete();
        }

        // Menghapus data Kelurahan
        $kelurahan->delete();

        // Menyimpan transaksi
        DB::commit();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('kelurahans.index')->with('success', 'Kelurahan berhasil dihapus.');
    } catch (\Exception $e) {
        // Membatalkan transaksi jika terjadi kesalahan
        DB::rollback();

        // Redirect kembali ke halaman index dengan pesan error
        return redirect()->route('kelurahans.index')->with('error', 'Gagal menghapus Kelurahan: ' . $e->getMessage());
    }
}

}
