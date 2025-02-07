@extends('master')

@section('title', 'Peminjaman')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Peminjaman</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Peminjaman</h4>
                        <div class="card-header-form">
                            <button class="btn btn-sm btn-primary" type="button" data-target="#modal-tambah"
                                data-toggle="modal">Tambah Data</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Judul Buku</th>
                                    <th>Nama Lengkap</th>
                                    <th>Kelas</th>
                                    <th>Tanggal Peminjaman</th>
                                    @if (auth()->user()->role === 'Guru')
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($peminjaman as $data)
                                    <tr>
                                        <td>{{ $data->judul_buku }}</td>
                                        <td>{{ $data->nama_lengkap }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->tanggal_peminjaman }}</td>
                                        @if (auth()->user()->role === 'Guru')
                                            <td>
                                                <form action="/peminjaman/{{ $data->id }}" method="GET">
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger" type="submit"><i
                                                            class="fa fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('formpeminjaman')
@endsection
