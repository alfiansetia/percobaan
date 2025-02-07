<?php

namespace App\Http\Controllers;


use App\Models\Kategori;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class KategoriController extends Controller
{
    public function index() {
        $kategori = \App\Models\Kategori::all();
        return view('kategori', compact('kategori'));
    }

    public function store(Request $request) {
        $path = null;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $request->merge(['image' => $path]);
        }

        $data = $request->all();
        $data['image'] = $path;

        \App\Models\Kategori::create($data);

        return redirect('kategori')->with('sukses', 'Buku berhasil disimpan');
    }

    public function edit($id) {
        $kategori = \App\Models\Kategori::find($id);

        return view('edit', compact('kategori'));
    }

    public function update(Request $request, $id) {
        $kategori = \App\Models\Kategori::find($id);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $request->merge(['image' => $path]);
        }

        $kategori->update($request->all());

        return redirect('kategori')->with('sukses', 'Diperbarui');
    }

    public function destroy($id) {
        $kategori = \App\Models\Kategori::find($id);
        $kategori->delete();

        return redirect('kategori')->with('sukses', 'Hapus');
    }
}