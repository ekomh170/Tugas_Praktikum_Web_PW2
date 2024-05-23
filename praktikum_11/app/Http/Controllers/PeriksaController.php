<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
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
        // $periksas = Periksa::all();
        $periksas = Periksa::with(['dokter', 'pasien'])->get();
        return view('periksa.index', compact('periksas', 'title', 'author', 'sub'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Periksa $periksa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periksa $periksa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periksa $periksa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periksa $periksa)
    {
        //
    }
}
