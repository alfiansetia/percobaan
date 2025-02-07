<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalKategori = Kategori::count();
        $totalPeminjaman = Peminjaman::count();

        return view('dashboard.index', compact('totalKategori', 'totalPeminjaman'));
    }
}
