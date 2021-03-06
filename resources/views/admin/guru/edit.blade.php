@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Guru</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Guru</a></li>
                    <li class="breadcrumb-item active">Edit Guru</li>
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
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Form Edit Guru</h4>
                    <form class="" action="{{ route('guru.update', $guru->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">NIP</label>
                            <div class="col-sm-4">
                                <input type="text" name="nip" class="form-control" required placeholder="NIP" value="{{ $guru->nip }}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Nama Guru</label>
                            <div class="col-sm-4">
                                <input type="text" name="nama_guru" class="form-control" value="{{ $guru->nama_guru }}" required placeholder="Nama Guru"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Jenis Kelamin</label>
                            <div class="col-sm-3">
                                <select name="jenis_kelamin" class="form-control">
                                    @foreach($jenkel as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Tempat Lahir</label>
                            <div class="col-sm-4">
                                <input type="text" name="tempat_lahir" class="form-control" value="{{ $guru->tempat_lahir }}" required placeholder="Tempat Lahir"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $guru->tanggal_lahir }}" required placeholder="Tanggal Lahir"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Agama</label>
                            <div class="col-sm-3">
                                <select name="agama" class="form-control">
                                    @foreach($agama as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Alamat</label>
                            <div class="col-sm-4">
                                <textarea name="alamat" required class="form-control" rows="5">{{ $guru->alamat }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right"></label>
                            <div class="col-sm-4">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Update
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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
