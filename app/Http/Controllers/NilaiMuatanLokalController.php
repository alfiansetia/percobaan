<?php

namespace App\Http\Controllers;

use App\Models\NilaiMuatanLokal;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiMuatanLokalController extends Controller
{
        public function index()
    {
        $data = NilaiMuatanLokal::with('siswa')->where('kelas', '1A')->get();
        return view('nilai.index', compact('data'));
    }

    public function create()
    {
        $siswas = Siswa::where('kelas', '1A')->get();
        return view('nilai.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['jumlah_nilai'] = collect($request->only(['nilai_1','nilai_2','nilai_3','nilai_4','nilai_5','nilai_6','nilai_7','nilai_8','nilai_9','nilai_10','nilai_11','nilai_12']))
            ->filter()
            ->sum();

        NilaiMuatanLokal::create($data);

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil ditambahkan');
    }

    public function edit($id)
    {
        $nilai = NilaiMuatanLokal::findOrFail($id);
        return view('nilai.edit', compact('nilai'));
    }

    public function update(Request $request, $id)
    {
        $nilai = NilaiMuatanLokal::findOrFail($id);
        $data = $request->all();
        $data['jumlah_nilai'] = collect($request->only(['nilai_1','nilai_2','nilai_3','nilai_4','nilai_5','nilai_6','nilai_7','nilai_8','nilai_9','nilai_10','nilai_11','nilai_12']))
            ->filter()
            ->sum();

        $nilai->update($data);

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diupdate');
    }

    public function destroy($id)
    {
        NilaiMuatanLokal::destroy($id);
        return back()->with('success', 'Data berhasil dihapus');
    }
}
