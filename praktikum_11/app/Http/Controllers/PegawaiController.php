<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $title = "Halaman Pegawai"; 
        $author = "Eko Muchamad Haryono"; 
        return view('pegawai.index', compact('title', 'author'));
    }
}
