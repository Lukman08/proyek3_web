@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Aturan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('aturan') }}">Aturan</a></li>
                            <li class="breadcrumb-item active"> Edit Aturan</li>
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
                            <form action="{{ route('updateaturan', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Penyakit</label>
                                        <select name="id_penyakit" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                            @foreach ($penyakit as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->kodepenyakit . ' - ' . $row->namapenyakit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Daftar Gejala</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @php
                                                    $gejalaCount = count($gejala);
                                                    $halfCount = ceil($gejalaCount / 2);
                                                @endphp
                                                @foreach ($gejala as $index => $row)
                                                    @if ($index < $halfCount)
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="daftargejala" value="{{ $row->id }}">
                                                                {{ $row->namagejala }}
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-6">
                                                @foreach ($gejala as $index => $row)
                                                    @if ($index >= $halfCount)
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="daftargejala" value="{{ $row->id }}">
                                                                {{ $row->namagejala }}
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('aturan') }}" class="btn btn-secondary">Kembali</a>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Aturan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Aturan</a></li>
                        <li class="breadcrumb-item active">Edit Data Aturan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @include('sweetalert::alert')
    <!-- /.content-header -->
@endsection
