<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Halaman Admin -- Eko Muchamad Haryono"; 
        return view('admin.index', \compact('title'));
    }
}
