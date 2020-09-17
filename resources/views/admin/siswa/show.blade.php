@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Siswa</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Siswa</a></li>
                    <li class="breadcrumb-item active">Detail Siswa</li>
                </ol>

                <div class="state-information d-none d-sm-block">
                    <div class="state-graph">
                        <div id="header-chart-1"></div>
                        <div class="info">Balance $ 2,317</div>
                    </div>
                    <div class="state-graph">
                        <div id="header-chart-2"></div>
                        <div class="info">Item Sold 1230</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Detail Siswa</h4>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">NISN</label>
                            <div class="col-sm-4">
                                <input type="text" name="nisn" class="form-control" required value="{{ $siswa->nisn }}" disabled/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Nama Siswa</label>
                            <div class="col-sm-4">
                                <input type="text" name="nama_siswa" class="form-control" required value="{{ $siswa->nama_siswa }}" disabled/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Kelas</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama_siswa" class="form-control" required value="{{ $siswa->kelas_id }}" disabled/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Jenis Kelamin</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama_siswa" class="form-control" required value="{{ $siswa->jenis_kelamin }}" disabled/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Tempat Lahir</label>
                            <div class="col-sm-4">
                                <input type="text" name="tempat_lahir" class="form-control" required value="{{ $siswa->tempat_lahir }}" disabled/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_lahir" class="form-control" required value="{{ $siswa->tanggal_lahir }}" disabled/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Agama</label>
                            <div class="col-sm-3">
                                <input type="text" name="tanggal_lahir" class="form-control" required value="{{ $siswa->agama }}" disabled/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Alamat</label>
                            <div class="col-sm-4">
                                <textarea name="alamat" required class="form-control" rows="5" disabled>{{ $siswa->alamat }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Email</label>
                            <div class="col-sm-4">
                                <input type="text" name="email" class="form-control" required value="{{ $siswa->email }}" disabled/>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Orang Tua</label>
                            <div class="col-sm-4">
                                <input type="text" name="email" class="form-control" required value="{{ $siswa->ortu->nama_ortu }}" disabled/>
                            </div>
                        </div> --}}

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container-fluid -->
@endsection

@section('script')
        <!-- Parsley js -->
        <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
@endsection

@section('script-bottom')
        <script>
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
@endsection
