@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Penyakit</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('penyakit') }}">Penyakit</a></li>
                            <li class="breadcrumb-item active"> Edit Penyakit</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- form start -->
                            <form action="{{ route('updatepenyakit', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Kode Penyakit</label>
                                        <input type="text" name="kodepenyakit" class="form-control"
                                            value="{{ $data->kodepenyakit }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Penyakit</label>
                                        <input type="text" name="namapenyakit" class="form-control"
                                            value="{{ $data->namapenyakit }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3">{{ $data->deskripsi }}</textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('penyakit') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                                <div class="card-footer">
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@include('sweetalert::alert')
<!-- /.content-header -->
@endsection
