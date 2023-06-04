@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Penyakit</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Penyakit</li>
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
                                    <th class="text-center">Kode Penyakit</th>
                                    <th class="text-center">Nama Penyakit</th>
                                    <th class="text-center">Deskripsi</th>
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
                                        <td class="text-center">{{ $row->kodepenyakit }}</td>
                                        <td class="text-center">{{ $row->namapenyakit }}</td>
                                        <td>{{ Str::limit($row->deskripsi, 25) }}</td>
                                        <td>{{ Str::limit($row->solusi, 25) }}</td>
                                        <td class="text-center">
                                            <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    Menu
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('editpenyakit', $row->id) }}">Edit</a>
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

                    {{-- modal add --}}
                    <div class="modal fade" id="modal-add">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Data Penyakit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('insertpenyakit') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Kode Penyakit</label>
                                            <input type="text" name="kodepenyakit" class="form-control"
                                                value="{{ $kd_pe }}" readonly required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Penyakit</label>
                                            <input type="text" name="namapenyakit" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Solusi</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="solusi" rows="3" required></textarea>
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
                                        <p class="text-center">Apakah anda yakin ingin menghapus penyakit
                                            "{{ $row->namapenyakit }}" ?</p>
                                    </div>
                                    <div class="text-center mb-2">
                                        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Batal</button>
                                        <a href="{{ route('deletepenyakit', $row->id) }}" class="btn btn-danger">Hapus</a>
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
