<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Daftar Pasien";
        $author = "Eko Muchamad Haryono";
        $sub = "Pasien";
        $pasiens = Pasien::with('kelurahan')->get();
        return view('pasien.index', compact('pasiens', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Pasien";
        $author = "Eko Muchamad Haryono";
        $sub = "Pasien";
        $kelurahans = Kelurahan::all();
        return view('pasien.create', compact('title', 'author', 'sub', 'kelurahans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|unique:pasiens,kode|max:10',
            'nama' => 'required|string|max:50',
            'tmp_lahir' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string|max:10',
            'email' => 'required|string|email|max:50',
            'alamat' => 'required|string',
            'kelurahan_id' => 'required|integer|exists:kelurahans,id',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Pasien created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        $title = "Detail Data Pasien";
        $author = "Eko Muchamad Haryono";
        $sub = "Pasien";
        return view('pasien.show', compact('pasien', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        $title = "Edit Data Pasien";
        $author = "Eko Muchamad Haryono";
        $sub = "Pasien";
        $kelurahan = Kelurahan::all();
        return view('pasien.edit', compact('pasien', 'title', 'author', 'sub', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'kode' => 'required|string|max:10|unique:pasiens,kode,' . $pasien->id,
            'nama' => 'required|string|max:50',
            'tmp_lahir' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string|max:10',
            'email' => 'required|string|email|max:50',
            'alamat' => 'required|string',
            'kelurahan_id' => 'required|integer|exists:kelurahans,id',
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Pasien updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        try {
            // Memulai transaksi database
            DB::beginTransaction();

            // Menghapus semua record terkait di tabel `periksas`
            $pasien->periksas()->delete();

            // Menghapus instance Pasien
            $pasien->delete();

            // Commit transaksi
            DB::commit();

            // Redirect kembali ke halaman index dengan pesan sukses
            return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil dihapus.');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();

            // Redirect kembali ke halaman index dengan pesan error
            return redirect()->route('pasiens.index')->with('error', 'Gagal menghapus Pasien: ' . $e->getMessage());
        }
    }
}
