@extends('admin.layouts.master')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Detail Latihan</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Guru</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Latihan</a></li>
                    <li class="breadcrumb-item active">Detail Latihan</li>
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

    {{-- alert --}}
    @if (session('info'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-secondary bg-info alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Info! </strong> {{ session('info') }}.
            </div>
        </div>
    </div>
    @endif
    {{-- end alert --}}


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="btn-toolbar p-3" role="toolbar">
                    <h4 class="mt-0 font-18">Detail Latihan</h4>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <td>Kelas</td><td class="text-right">:</td><td class="text-left">{{ $latihan->kelas->nama_kelas }}</td>
                        </tr>
                        <tr>
                            <td>Judul Latihan</td><td class="text-right">:</td><td class="text-left">{{ $latihan->judul_latihan }}</td>
                        </tr>
                        <tr>
                            <td>File Latihan</td><td class="text-right">:</td><td class="text-left"><a class="btn btn-primary" href="{{ Storage::url($latihan->file_latihan) }}">Download</a></td>
                        </tr>
                        <tr>
                            <td>Guru</td><td class="text-right">:</td><td class="text-left">{{ $latihan->user->guru->nama_guru }}</td>
                        </tr>
                    </table>




                    <hr>
                    <h4 class="mt-0 font-18">Daftar siswa yang mengikuti latihan</h4>
                    <table class="table table-sm table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th class="text-center">File Jawaban Siswa</th>
                            <th class="text-center">Tanggal Upload</th>
                            <th class="text-center">Nilai</th>
                            <th class="text-center">Penilaian</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($latihan->penilaian as $data)
                            <tr>
                                <td style="width:5%">{{ $loop->iteration }}</td>
                                <td style="width:19%">{{ $data->siswa->nama_siswa }}</td>
                                <td style="width:19%"><a class="btn btn-info" href="{{ Storage::url($data->file_siswa ?? 'Tidak ada file') }}">Download</a></td>
                                <td style="width:19%">{{ $data->created_at }}</td>
                                <td style="width:19%">{{ $data->nilai }}</td>
                                <td style="width:19%">
                                    {{-- <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-tambah-dokumen">Beri Nilai</button> --}}
                                    <a class="d-print-none btn btn-sm btn-success" href="#" data-toggle="modal" data-target=".bs-example-modal-center">Beri Penilaian</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- End row -->
</div> <!-- container-fluid -->

{{-- modal latihan --}}
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('guru-penilaian.update', $data->id ?? '') }}" method="POST">
            @csrf
            @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Penilaian Siswa - {{ $data->siswa->nama_siswa }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai angka">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="nilai" placeholder="Keterangan">
                    </div>

                    {{-- <div class="form-group">
                        <label>File Jawaban</label>
                        <input type="text" id="foto" name="file_siswa" accept=".pdf, .docx, .doc, .xls, .xlsx" class="filestyle" data-buttonname="btn-info">
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
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

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
} );
</script>
@endsection

@section('script-bottom')

@endsection
