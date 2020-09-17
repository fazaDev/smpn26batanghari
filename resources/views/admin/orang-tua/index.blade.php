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
                <h4 class="page-title">Data Orang Tua</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                    {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li> --}}
                    <li class="breadcrumb-item active">Data Orang Tua</li>
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

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-header">
                    <div class="row flex">
                        <div class="col-md-10">
                            Data Orang Tua Siswa
                        </div>
                        <div class="col-md-2 float-right">
                            <a class="btn btn-primary btn-block" href="{{ route('orang-tua.create') }}">Tambah Orang Tua</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Orang Tua</th>
                            <th>Email Orang Tua</th>
                            <th>Nama Siswa</th>
                            <th>Kelas Siswa</th>
                            <th>Tindakan</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($orangtua as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_ortu }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->siswa->nama_siswa }}</td>
                                <td>{{ $item->siswa->kelas->nama_kelas }}</td>
                                <td class="text-center">
                                    {{-- <div class="form-button-action">
                                        <a class="btn btn-sm btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Detail Jalan {{ $item->nama_ruas }}" href="{{ route('jalan.show', $item->id) }}"><i class="fa fa-info-circle"></i></a>
                                        <a class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit Jalan" href="#"><i class="fa fa-pencil-alt"></i></a>
                                        <a class="btn btn-sm btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Hapus Jalan" href="#"><i class="far fa-trash-alt"></i></a>
                                        <a class="btn btn-sm btn-secondary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Lihat Peta Lokasi" href="#" alt="Lihat Peta"><i class="fa fa-map-marker-alt"></i></a>
                                    </div> --}}
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-cogs"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                            {{-- <a class="btn btn-sm btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Detail Jalan {{ $item->nama_ruas }}" href="{{ route('jalan.show', $item->id) }}"><i class="fa fa-info-circle"></i> Detail</a> --}}
                                            <a class="dropdown-item" href="{{ route('orang-tua.show', $item->id) }}"><i class="fa fa-info-circle"></i> Detail</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash-alt"></i> Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> <!-- container-fluid -->
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
