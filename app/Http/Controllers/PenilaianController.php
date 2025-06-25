<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenilaianController extends Controller
{
    public function index(Request $request)
    {
        $data_class = collect(config('other.kelas'));
        $data_mapel = collect(config('other.mapel'));
        $class = $data_class->where('code', $request->code)->first();
        $mapel = $data_mapel->where('code', $request->mapel)->first();
        $query = Penilaian::query();
        if ($class) {
            $query->where('class_code', $class['code']);
        }
        if ($mapel) {
            $query->where('mapel_code', $mapel['code']);
        }
        $data = $query->get();
        if ($request->ajax()) {
            return response()->json(['data' => $data]);
        }
        if (!$class || !$mapel) {
            return redirect()->route('dashboard')->with('error', 'Pilih Kelas & Mapel!');
        }
        return view('penilaian', compact([
            'class',
            'mapel'
        ]));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "code"      => "required",
            "mapel"     => "required",
            "name"      => "required",
            "nilai1"    => "required|gte:0",
            "nilai2"    => "required|gte:0",
            "nilai3"    => "required|gte:0",
            "nilai4"    => "required|gte:0",
            "nilai5"    => "required|gte:0",
            "nilai6"    => "required|gte:0",
            "nilai7"    => "required|gte:0",
            "nilai8"    => "required|gte:0",
            "nilai9"    => "required|gte:0",
            "nilai10"   => "required|gte:0",
            "nilai11"   => "required|gte:0",
            "nilai12"   => "required|gte:0",
        ]);
        $penilaian = Penilaian::create([
            'class_code'    => $request->code,
            'mapel_code'    => $request->mapel,
            'name'          => $request->name,
            'nilai1'        => $request->nilai1,
            'nilai2'        => $request->nilai2,
            'nilai3'        => $request->nilai3,
            'nilai4'        => $request->nilai4,
            'nilai5'        => $request->nilai5,
            'nilai6'        => $request->nilai6,
            'nilai7'        => $request->nilai7,
            'nilai8'        => $request->nilai8,
            'nilai9'        => $request->nilai9,
            'nilai10'       => $request->nilai10,
            'nilai11'       => $request->nilai11,
            'nilai12'       => $request->nilai12,
        ]);
        return response()->json(['data' => $penilaian, 'message' => 'Sukses Tambah Data!']);
    }

    public function show(string $id)
    {
        $penilaian = Penilaian::find($id);
        if (!$penilaian) {
            return response()->json(['message' => 'Data tidak ditemukan!'], 404);
        }
        return response()->json(['data' => $penilaian]);
    }

    public function update(Request $request, Penilaian $penilaian)
    {
        $this->validate($request, [
            "name"      => "required",
            "nilai1"    => "required|gte:0",
            "nilai2"    => "required|gte:0",
            "nilai3"    => "required|gte:0",
            "nilai4"    => "required|gte:0",
            "nilai5"    => "required|gte:0",
            "nilai6"    => "required|gte:0",
            "nilai7"    => "required|gte:0",
            "nilai8"    => "required|gte:0",
            "nilai9"    => "required|gte:0",
            "nilai10"   => "required|gte:0",
            "nilai11"   => "required|gte:0",
            "nilai12"   => "required|gte:0",
        ]);
        $penilaian->update([
            'name'          => $request->name,
            'nilai1'        => $request->nilai1,
            'nilai2'        => $request->nilai2,
            'nilai3'        => $request->nilai3,
            'nilai4'        => $request->nilai4,
            'nilai5'        => $request->nilai5,
            'nilai6'        => $request->nilai6,
            'nilai7'        => $request->nilai7,
            'nilai8'        => $request->nilai8,
            'nilai9'        => $request->nilai9,
            'nilai10'       => $request->nilai10,
            'nilai11'       => $request->nilai11,
            'nilai12'       => $request->nilai12,
        ]);
        return response()->json(['data' => $penilaian, 'message' => 'Sukses Ubah Data!']);
    }

    public function destroy(Penilaian $penilaian)
    {
        $penilaian->delete();
        return response()->json(['data' => $penilaian, 'message' => 'Sukses Hapus Data!']);
    }

    public function export(Request $request)
    {
        $data_class = collect(config('other.kelas'));
        $data_mapel = collect(config('other.mapel'));
        $class = $data_class->where('code', $request->code)->first();
        $mapel = $data_mapel->where('code', $request->mapel)->first();
        if (!$class || !$mapel) {
            return redirect()->route('dashboard')->with('error', 'Pilih Kelas & Mapel!');
        }
        $query = Penilaian::query();
        if ($class) {
            $query->where('class_code', $class['code']);
        }
        if ($mapel) {
            $query->where('mapel_code', $mapel['code']);
        }
        $data = $query->get();
        $file_name = $class['name'] . '_' . $mapel['name'] . '_' . Str::random(8) . '.pdf';
        return Pdf::loadView('export', [
            'data' => $data,
            'class' => $class,
            'mapel' => $mapel
        ])->download($file_name);
    }
}
