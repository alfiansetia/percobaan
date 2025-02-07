@extends('master')

@section('title', 'Dashboard')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4>Dashboard</h4>
            </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                              <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                  <i class="far fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                  <div class="card-header">
                                    <h4>TOTAL DAFTAR BUKU</h4>
                                  </div>
                                  <div class="card-body">
                                    {{ $totalKategori }}
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                              <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                  <i class="far fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                  <div class="card-header">
                                    <h4>TOTAL PEMINJAMAN</h4>
                                  </div>
                                  <div class="card-body">
                                    {{ $totalPeminjaman }}
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
    
                        </div>
                    </div>
                
            </div>
        </section>
    </div>
@endsection