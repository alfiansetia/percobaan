@extends('master')

@section('title', 'Data Nilai Muatan Lokal Kelas 1A')

@section('content')
<div class="container">
    <h3 class="mb-3">Nilai Muatan Lokal - Kelas 1A</h3>

    <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">+ Tambah Nilai</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                @for ($i = 1; $i <= 12; $i++)
                    <th>Nilai {{ $i }}</th>
                @endfor
                <th>Jumlah Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $item->siswa->nama }}</td>
                    @for ($i = 1; $i <= 12; $i++)
                        <td>{{ $item->{'nilai_' . $i} ?? '-' }}</td>
                    @endfor
                    <td>{{ $item->jumlah_nilai }}</td>
                    <td>
                        <a href="{{ route('nilai.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('nilai.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="15" class="text-center">Belum ada data nilai.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
