<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman', compact('peminjaman'));
    }

    public function create()
    {
        return view('formpeminjaman');
    }

    public function store(Request $request)
    {
        \App\Models\Peminjaman::create($request->all());

        return redirect('peminjaman');
    }

    public function destroy($id)
    {
        $peminjaman = \App\Models\Peminjaman::find($id);
        $peminjaman->delete();

        return redirect('peminjaman');
    }
}
