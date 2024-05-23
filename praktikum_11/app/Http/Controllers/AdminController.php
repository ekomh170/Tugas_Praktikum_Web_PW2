<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Halaman Admin"; 
        $author = "Eko Muchamad Haryono";
        $dokter = Dokter::all();
        return view('admin.index', compact('title', 'author', 'dokter'));
    }
}
