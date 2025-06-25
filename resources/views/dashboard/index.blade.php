@extends('master')

@section('title', 'Dashboard')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4>Dashboard</h4>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Kelas</h4>
                            </div>
                            <div class="card-body">
                                {{ count($class) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>JUMLAH MAPEL</h4>
                            </div>
                            <div class="card-body">
                                {{ count($mapel) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>JUMLAH PENDIDIK</h4>
                            </div>
                            <div class="card-body">
                                15
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="row">
                    @foreach (config('other.kelas') as $class)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="card card-primary">
                                <div class="card-header" data-toggle="collapse"
                                    data-target="#collapseOne-{{ $class['code'] }}" aria-expanded="false"
                                    aria-controls="collapseOne-{{ $class['code'] }}" style="cursor: pointer">
                                    <h4>KELAS
                                        {{ $class['name'] }}</h4>
                                </div>
                                <div id="collapseOne-{{ $class['code'] }}" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body p-0">
                                        <div class="list-group list-group-flush">
                                            @foreach (config('other.mapel') as $mapel)
                                                <a href="{{ route('penilaian.index') }}?code={{ $class['code'] }}&mapel={{ $mapel['code'] }}"
                                                    class="list-group-item">{{ $mapel['name'] }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
    </div>
@endsection
