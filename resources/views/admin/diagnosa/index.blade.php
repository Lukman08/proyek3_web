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
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-add">
                            <i class="fa fa-plus-circle"></i>
                        </button>
                        <button onclick="printTable()" class="btn btn-outline-secondary"><i
                                class="fas fa-print"></i></button>
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
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Solusi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $nom = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th class="text-center">{{ $nom++ }}</th>
                                        <td class="text-center">{{ $row->user->name }}</td>
                                        <td class="text-center">{{ $row->created_at->format('d F Y') }}</td>
                                        <td class="text-center">
                                            {{ str_replace(',', ' - ', str_replace('"', '', str_replace(str_split('[]'), '', $row->gejala))) }}
                                        </td>
                                        <td class="text-center">{{ $row->penyakits->namapenyakit }}</td>
                                        <td class="text-justify">{{ $row->deskripsi }}</td>
                                        <td class="text-justify">{{ $row->solusi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- modal add --}}
                    <div class="modal fade" id="modal-add">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Diagnosa Pasien</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('insertdiagnosa') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Pilih Pasien</label>
                                            <select name="user_id" class="form-control" required>
                                                <option value="" disabled selected>Pilih</option>
                                                @foreach ($user as $row)
                                                    <option value="{{ $row->id }}">
                                                        {{ $row->name . ' (' . $row->email . ')' }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <label>Diagnosa</label>
                                        <div class="row">
                                            @foreach ($gejala as $gej)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>{{ $gej->id }}. Apakah kamu mengalami gejala
                                                            {{ $gej->namagejala }}?</p>
                                                        <div class="checkbox">
                                                            <p style="display: inline-block; margin-right: 10px;">
                                                                <input type="checkbox" name="gejala[]"
                                                                    value="{{ $gej->kodegejala }}">
                                                                Ya
                                                            </p>
                                                            <p style="display: inline-block;">
                                                                <input type="checkbox">
                                                                Tidak
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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

                </div>
                <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
