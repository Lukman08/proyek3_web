@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Diagnosa</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Diagnosa</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <a href="#" class="btn btn-outline-success">
                            <i class="fa fa-plus-circle"></i>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="data" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Pasien</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Gejala</th>
                                    <th class="text-center">Hasil</th>
                                    <th class="text-center">Solusi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $nom = 1;
                            @endphp
                            @foreach ($data as $row)
                                <tr>
                                    <th class="text-center">{{ $nom++ }}</th>
                                    <td class="text-center">{{ $row->user_id }}</td>
                                    <td class="text-center">{{ $row->created_at->format('d F Y') }}</td>
                                    <td class="text-center">{{ $row->gejala }}</td>
                                    <td class="text-center">{{ $row->hasil }}</td>
                                    <td class="text-center">{{ $row->solusi }}</td>
                                    <td>
                                        <div class="btn-group dropleft">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
