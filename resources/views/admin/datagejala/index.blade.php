@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Gejala</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Gejala</li>
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
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-add">
                            <i class="fa fa-plus-circle"></i>
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="data" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode Gejala</th>
                                    <th class="text-center">Nama Gejala</th>
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
                                        <td class="text-center">{{ $row->kodegejala }}</td>
                                        <td class="text-center">{{ $row->namagejala }}</td>
                                        <td class="text-center">
                                            <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    Menu
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('editgejala', $row->id) }}">Edit</a>
                                                    <button class="dropdown-item deletebtn" data-toggle="modal"
                                                        data-target="#modal-delete">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="modal fade" id="modal-add">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Data Gejala</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('insertgejala') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Kode Gejala</label>
                                            <input type="text" name="kodegejala" class="form-control"
                                                value="{{ $kd_ge }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Gejala</label>
                                            <input type="text" name="namagejala" class="form-control" required>
                                        </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    {{-- modal hapus --}}
                    @if (!empty($row))
                        <div class="modal fade" id="modal-delete">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body mt-3">
                                        <p class="text-center">Apakah anda yakin ingin menghapus gejala
                                            "{{ $row->namagejala }}"
                                            ?</p>
                                    </div>
                                    <div class="text-center mb-2">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="{{ route('deletegejala', $row->id) }}" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    @endif
                    <!-- /.modal  delete-->
                </div>
                <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @include('sweetalert::alert')
@endsection
