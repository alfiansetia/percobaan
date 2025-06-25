@php
    $q = '?code=' . ($class['code'] ?? '') . '&mapel=' . ($mapel['code'] ?? '');
    $title = 'Daftar Penilaian ' . ' Siswa di Kelas ' . $class['name'] ?? '';
@endphp

@extends('master')

@section('title', $title)

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $mapel['name'] ?? '' }}</h4>
                        <div class="card-header-form">
                            <button class="btn btn-sm btn-primary" type="button" data-target="#modal-tambah"
                                data-toggle="modal"><i class="fas fa-plus"></i> Tambah</button>
                            <button class="btn btn-sm btn-info" type="button" id="refresh"><i
                                    class="fas fa-sync-alt"></i> Refresh</button>
                            <a href="{{ route('penilaian.export') }}?code={{ $class['code'] ?? 0 }}&mapel={{ $mapel['code'] ?? 0 }}"
                                class="btn btn-sm btn-warning"><i class="fas fa-file-pdf"></i>
                                Export</a>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-stripped table-hover" id="table"
                                style="width: 100%; cursor: pointer;">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 30px;">No</th>
                                        <th>Nama</th>
                                        <th>Nilai 1</th>
                                        <th>Nilai 2</th>
                                        <th>Nilai 3</th>
                                        <th>Nilai 4</th>
                                        <th>Nilai 5</th>
                                        <th>Nilai 6</th>
                                        <th>Nilai 7</th>
                                        <th>Nilai 8</th>
                                        <th>Nilai 9</th>
                                        <th>Nilai 10</th>
                                        <th>Nilai 11</th>
                                        <th>Nilai 12 </th>
                                        <th>Total</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" id="form_add">
                        @csrf
                        <input type="hidden" name="code" value="{{ $class['code'] ?? '' }}">
                        <input type="hidden" name="mapel" value="{{ $mapel['code'] ?? '' }}">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nilai1">Nilai 1</label>
                                <input type="number" name="nilai1" id="nilai1" class="form-control" min="0"
                                    value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nilai2">Nilai 2</label>
                                <input type="number" name="nilai2" id="nilai2" class="form-control" min="0"
                                    value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nilai3">Nilai 3</label>
                                <input type="number" name="nilai3" id="nilai3" class="form-control" min="0"
                                    value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nilai4">Nilai 4</label>
                                <input type="number" name="nilai4" id="nilai4" class="form-control" min="0"
                                    value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nilai5">Nilai 5</label>
                                <input type="number" name="nilai5" id="nilai5" class="form-control" min="0"
                                    value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nilai6">Nilai 6</label>
                                <input type="number" name="nilai6" id="nilai6" class="form-control" min="0"
                                    value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nilai7">Nilai 7</label>
                                <input type="number" name="nilai7" id="nilai7" class="form-control" min="0"
                                    value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nilai8">Nilai 8</label>
                                <input type="number" name="nilai8" id="nilai8" class="form-control" min="0"
                                    value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nilai9">Nilai 9</label>
                                <input type="number" name="nilai9" id="nilai9" class="form-control" min="0"
                                    value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nilai10">Nilai 10</label>
                                <input type="number" name="nilai10" id="nilai10" class="form-control" min="0"
                                    value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nilai11">Nilai 11</label>
                                <input type="number" name="nilai11" id="nilai11" class="form-control" min="0"
                                    value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nilai12">Nilai 12</label>
                                <input type="number" name="nilai12" id="nilai12" class="form-control" min="0"
                                    value="0" required>
                            </div>
                        </div>

                        <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                        <button id="reset" type="reset" class="btn btn-sm btn-warning ml-2">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UBAH</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" id="form_edit">
                        @csrf
                        <div class="form-group">
                            <label for="edit_name">Nama</label>
                            <input type="text" name="name" id="edit_name" class="form-control" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="edit_nilai1">Nilai 1</label>
                                <input type="number" name="nilai1" id="edit_nilai1" class="form-control"
                                    min="0" value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edit_nilai2">Nilai 2</label>
                                <input type="number" name="nilai2" id="edit_nilai2" class="form-control"
                                    min="0" value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="edit_nilai3">Nilai 3</label>
                                <input type="number" name="nilai3" id="edit_nilai3" class="form-control"
                                    min="0" value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edit_nilai4">Nilai 4</label>
                                <input type="number" name="nilai4" id="edit_nilai4" class="form-control"
                                    min="0" value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="edit_nilai5">Nilai 5</label>
                                <input type="number" name="nilai5" id="edit_nilai5" class="form-control"
                                    min="0" value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edit_nilai6">Nilai 6</label>
                                <input type="number" name="nilai6" id="edit_nilai6" class="form-control"
                                    min="0" value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="edit_nilai7">Nilai 7</label>
                                <input type="number" name="nilai7" id="edit_nilai7" class="form-control"
                                    min="0" value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edit_nilai8">Nilai 8</label>
                                <input type="number" name="nilai8" id="edit_nilai8" class="form-control"
                                    min="0" value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="edit_nilai9">Nilai 9</label>
                                <input type="number" name="nilai9" id="edit_nilai9" class="form-control"
                                    min="0" value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edit_nilai10">Nilai 10</label>
                                <input type="number" name="nilai10" id="edit_nilai10" class="form-control"
                                    min="0" value="0" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="edit_nilai11">Nilai 11</label>
                                <input type="number" name="nilai11" id="edit_nilai11" class="form-control"
                                    min="0" value="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="edit_nilai12">Nilai 12</label>
                                <input type="number" name="nilai12" id="edit_nilai12" class="form-control"
                                    min="0" value="0" required>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        var id = 0;

        $(document).ready(function() {
            $.ajaxSetup({
                xhrFields: {
                    withCredentials: true
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'accept': 'application/json'
                }
            });


            var table = $('#table').DataTable({
                processing: true,
                serverSide: false,
                rowId: 'id',
                ajax: {
                    url: "{{ route('penilaian.index') }}",
                    data: function(d) {
                        d.code = "{{ $class['code'] ?? 0 }}"
                        d.mapel = "{{ $mapel['code'] ?? 0 }}"
                    }
                },
                columns: [{
                        title: 'No',
                        data: 'id',
                        width: "30px",
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }, {
                        title: "Nama",
                        data: 'name',
                    },
                    {
                        data: 'nilai1',
                    }, {
                        data: 'nilai2',
                    }, {
                        data: 'nilai3',
                    }, {
                        data: 'nilai4',
                    }, {
                        data: 'nilai5',
                    }, {
                        data: 'nilai6',
                    }, {
                        data: 'nilai7',
                    }, {
                        data: 'nilai8',
                    }, {
                        data: 'nilai9',
                    }, {
                        data: 'nilai10',
                    }, {
                        data: 'nilai11',
                    }, {
                        data: 'nilai12',
                    },
                    {
                        data: 'Total',
                        render: function(data, type, row, meta) {
                            return parseInt(row.nilai1) + parseInt(row.nilai2) + parseInt(row
                                    .nilai3) + parseInt(row.nilai4) + parseInt(row.nilai5) +
                                parseInt(row.nilai6) + parseInt(row.nilai7) + parseInt(row.nilai8) +
                                parseInt(row.nilai9) + parseInt(row.nilai10) + parseInt(row
                                    .nilai11) + parseInt(row.nilai12)
                        }
                    }, {
                        data: 'id',
                        className: "text-center",
                        render: function(data, type, row, meta) {
                            if (type == 'display') {
                                return `
                                <button type="button" class="btn btn-sm btn-warning edit"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>`
                            }
                            return data
                        }
                    },
                ],
            });

            $('#modal-tambah').on('shown.bs.modal', function() {
                $('#name').focus();
            })

            $('#form_add').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('penilaian.store') }}",
                    data: $(this).serialize(),
                    beforeSend: function() {
                        // table.ajax.reload()
                    },
                    success: function(res) {
                        table.ajax.reload();
                        $('#reset').click()
                        $('#modal-tambah').modal('hide')
                        show_message(res.message)
                    },
                    error: function(xhr, status, error) {
                        er = xhr.responseJSON.message
                        show_message(er, true)
                    }
                });
            })

            $('#form_edit').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    type: 'PUT',
                    url: "{{ route('penilaian.index') }}/" + id,
                    data: $(this).serialize(),
                    beforeSend: function() {
                        // table.ajax.reload()
                    },
                    success: function(res) {
                        table.ajax.reload();
                        $('#modal-edit').modal('hide')
                        show_message(res.message)
                    },
                    error: function(xhr, status, error) {
                        er = xhr.responseJSON.message
                        show_message(er, true)
                    }
                });
            })

            $('#table tbody').on('click', '.edit', function() {
                let row = $(this).parents('tr')[0];
                id = table.row(row).data().id
                $.ajax({
                    url: "{{ route('penilaian.index') }}/" + id,
                    method: 'GET',
                    success: function(result) {
                        $('#edit_id').val(result.data.id);
                        $('#edit_name').val(result.data.name);
                        $('#edit_nilai1').val(result.data.nilai1);
                        $('#edit_nilai2').val(result.data.nilai2);
                        $('#edit_nilai3').val(result.data.nilai3);
                        $('#edit_nilai4').val(result.data.nilai4);
                        $('#edit_nilai5').val(result.data.nilai5);
                        $('#edit_nilai6').val(result.data.nilai6);
                        $('#edit_nilai7').val(result.data.nilai7);
                        $('#edit_nilai8').val(result.data.nilai8);
                        $('#edit_nilai9').val(result.data.nilai9);
                        $('#edit_nilai10').val(result.data.nilai10);
                        $('#edit_nilai11').val(result.data.nilai11);
                        $('#edit_nilai12').val(result.data.nilai12);
                        $('#modal-edit').modal('show');
                        $('#modal-edit').on('shown.bs.modal', function() {
                            $('#edit_name').focus();
                        })
                    },
                    beforeSend: function() {
                        // block();
                    },
                    error: function(xhr, status, error) {
                        er = xhr.responseJSON.message
                        show_message(er, true)
                    }
                });
            });

            $('#table').on('click', '.delete', function() {
                let row = $(this).parents('tr')[0];
                data = table.row(row).data()
                confirmDelete(data.id)
            });

            function confirmDelete(id) {
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
                            $.ajax({
                                type: 'DELETE',
                                url: "{{ route('penilaian.index') }}/" + id,
                                data: $(this).serialize(),
                                beforeSend: function() {
                                    // table.ajax.reload()
                                },
                                success: function(res) {
                                    table.ajax.reload();
                                    show_message(res.message)
                                },
                                error: function(xhr, status, error) {
                                    er = xhr.responseJSON.message
                                    show_message(er, true)
                                }
                            });
                        }
                    });
            }

            $('#refresh').click(function() {
                table.ajax.reload()
            })
        });
    </script>
@endpush
