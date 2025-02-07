@extends('master')

@section('title', 'Daftar Buku')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Buku</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Buku</h4>
                        @if (auth()->user()->role === 'Guru')
                            <div class="card-header-form">
                                <button class="btn btn-sm btn-primary" type="button" data-target="#modal-tambah"
                                    data-toggle="modal">Tambah Buku</button>
                            </div>
                        @endif


                    </div>

                    <div class="card-body">
                        <table class="table table-stripped" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Image</th>
                                    @if (auth()->user()->role === 'Guru')
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($kategori as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->pengarang }}</td>
                                        <td>{{ $item->penerbit }}</td>
                                        <td>{{ $item->tahun_terbit }}</td>
                                        <td>
                                            @if ($item->image)
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama }}"
                                                    style="width: 90px; height: 90px;">
                                            @else
                                                -
                                            @endif
                                        </td>
                                        @if (auth()->user()->role === 'Guru')
                                            <td>
                                                <form action="/kategori/{{ $item->id }}"
                                                    id="delete-form{{ $item->id }}">
                                                    @method('delete')
                                                    <a href="/kategori/{{ $item->id }}/edit"
                                                        class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a>
                                                    <button class="btn btn-sm btn-danger"
                                                        onclick="confirmDelete('delete-form{{ $item->id }}')"><i
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
    @include('form')
@endsection

@push('script')
    <script>
        function confirmDelete(formId) {
            event.preventDefault()
            swal({
                    title: 'Kamu yakin?',
                    text: 'Data tidak dapat dikembalikan!',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById(formId).submit();
                    }
                });
        }

        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endpush
