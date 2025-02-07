@extends('master')

@section('title', 'Edit Data Kategori')

@section('content')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Edit Data</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Edit</h4>
                </div>

                <div class="card-body">
                    <form action="/kategori/{{ $kategori->id }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" name="kode" id="kode" class="form-control" value="{{ $kategori->kode }}">
                        </div>
            
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $kategori->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{ $kategori->pengarang }}">
                         </div>
              
                         <div class="form-group">
                          <label for="penerbit">Penerbit</label>
                          <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ $kategori->penerbit }}">
                         </div>
              
                         <div class="form-group">
                          <label for="tahun_terbit">Tahun Terbit</label>
                          <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ $kategori->tahun_terbit }}">
                         </div>
            
                        <button class="btn btn-sm btn-warning" type="submit">Perbarui</button>
                      </form>
                </div>
            </div>
        </div>
        </section>
    </div>
@endsection