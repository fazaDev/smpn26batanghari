@extends('admin.layouts.master')

@section('css')
        <!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        {{-- <link href="{{ asset('assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css')}}" rel="stylesheet" type="text/css"/> --}}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Data Materi</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Siswa</a></li>
                    {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li> --}}
                    <li class="breadcrumb-item active">Data Materi Pelajaran</li>
                </ol>

                <div class="state-information d-none d-sm-block">
                    {{-- <div class="state-graph"> --}}
                        {{-- <div id="header-chart-1"></div>
                        <div class="info">Balance $ 2,317</div> --}}
                        {{-- <a href="">Tambah Data</a> --}}
                    {{-- </div> --}}
                    <div class="state-graph">
                        <div id="header-chart-2"></div>
                        <div class="info">Total Siswa 200 Siswa</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    {{-- alert --}}
    @if (session('info'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-secondary bg-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Info! </strong> {{ session('info') }}
            </div>
        </div>
    </div>
    @endif
    {{-- end alert --}}

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <div class="row flex">
                        <div class="col-md-10">
                            Data Materi Pelajaran
                        </div>
                        <div class="col-md-2 float-right">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Guru</th>
                            <th>Judul Latihan</th>
                            <th>File</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($latihan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kelas->nama_kelas }}</td>
                                <td>{{ $item->user->guru->nama_guru }}</td>
                                <td>{{ $item->judul_latihan }}</td>
                                <td><a class="btn btn-info" href="{{ Storage::url($item->file_latihan) }}">Download File</a></td>
                                {{-- <td><a class="btn btn-primary" href="#">Upload Jawaban</a></td> --}}
                                <td><button type="button" class="btn btn-primary waves-light waves-effect" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-camera"></i> Upload jawaban</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->

{{-- modal latihan --}}
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('penilaian.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="latihan_id" value="{{ $item->id }}">
                <input type="hidden" name="kelas_id" value="{{ $item->kelas->id }}">
                <input type="hidden" name="siswa_id" value="{{ Auth::user()->siswa->id }}">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Form Upload Latihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Latihan</label>
                        <input type="text" class="form-control" name="nama_ruas" id="nama_ruas" value="{{ $item->judul_latihan }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>File Jawaban</label>
                        <input type="file" id="foto" name="file_siswa" accept=".pdf, .docx, .doc, .xls, .xlsx" class="filestyle" data-buttonname="btn-info">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{{-- end modal latihan--}}

@endsection

@section('script')
<!-- Required datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"></script>
<!-- Datatable init js -->
{{-- <script src="{{ asset('assets/pages/datatables.init.js')}}"></script> --}}
<script>
$(document).ready(function() {
    $('#datatable').DataTable();

    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});
</script>
@endsection
