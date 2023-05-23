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
                                    <th>No</th>
                                    <th>Pasien</th>
                                    <th>Tanggal</th>
                                    <th>Gejala</th>
                                    <th>Hasil</th>
                                    <th>Solusi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Herlambang</td>
                                    <td>20/02/2023</td>
                                    <td>............</td>
                                    <td>............</td>
                                    <td>............</td>
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
                                <tr>
                                    <td>2</td>
                                    <td>Gozali Ahmad</td>
                                    <td>20/02/2023</td>
                                    <td>............</td>
                                    <td>............</td>
                                    <td>............</td>
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
                                <tr>
                                    <td>3</td>
                                    <td>Abdul Latief</td>
                                    <td>22/02/2023</td>
                                    <td>............</td>
                                    <td>............</td>
                                    <td>............</td>
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
                                <tr>
                                    <td>4</td>
                                    <td>Ruikh Khan</td>
                                    <td>24/02/2023</td>
                                    <td>............</td>
                                    <td>............</td>
                                    <td>............</td>
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
                                <tr>
                                    <td>5</td>
                                    <td>Asyarifullah</td>
                                    <td>24/02/2023</td>
                                    <td>............</td>
                                    <td>............</td>
                                    <td>............</td>
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
                            </tbody>
                        </table>
                    </div>

                </div>
                <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
