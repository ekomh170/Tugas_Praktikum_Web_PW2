<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
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
        return view('kelurahan.create' , compact('title', 'author', 'sub'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Kelurahan::create($request->all());
        return redirect()->route('kelurahan.index')->with('success', 'Kelurahan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelurahan $kelurahan)
    {
        $title = "Daftar Kelurahan";
        $author = "Eko Muchamad Haryono"; 
        $sub = "Kelurahan";
        return view('kelurahan.show', compact('kelurahan'));
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
        ]);

        $kelurahan->update($request->all());
        return redirect()->route('kelurahan.index')->with('success', 'Kelurahan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelurahan $kelurahan)
    {
        $kelurahan->delete();
        return redirect()->route('kelurahan.index')->with('success', 'Kelurahan deleted successfully.');
    }
}
