@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{-- ucapan selamat berdasarkan waktu --}}
        @php
            date_default_timezone_set('Asia/Jakarta');
            $time = date('H:i:s');
            $greeting = '';
            
            if ($time >= '00:00' && $time < '04:00') {
                $greeting = 'Selamat dini hari';
            } elseif ($time >= '04:00' && $time < '10:00') {
                $greeting = 'Selamat pagi';
            } elseif ($time >= '10:00' && $time < '15:00') {
                $greeting = 'Selamat siang';
            } elseif ($time >= '15:00' && $time < '18:00') {
                $greeting = 'Selamat sore';
            } else {
                $greeting = 'Selamat malam';
            }
        @endphp

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h3 class="mb-3"> {{ $greeting . ', ' . Auth::user()->name}}</h3>
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-copy"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Data Gejala</span>
                                <span class="info-box-number">
                                    {{ $gejala }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-asterisk"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Data Penyakit</span>
                                <span class="info-box-number">{{ $penyakit }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-edit"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Diagnosa</span>
                                <span class="info-box-number">12</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Data Pasien</span>
                                <span class="info-box-number">{{ $user }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
