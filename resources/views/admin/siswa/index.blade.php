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
                <h4 class="page-title">Data Siswa</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                    {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li> --}}
                    <li class="breadcrumb-item active">Data Siswa</li>
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
                            Data Siswa
                        </div>
                        <div class="col-md-2 float-right">
                            <a class="btn btn-primary btn-block" href="{{ route('siswa.create') }}">Tambah Siswa</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center">NISN</th>
                            <th>Kelas</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            {{-- <th>Agama</th>
                            <th>Alamat</th>--}}
                            <th>Email</th>
                            <th>Tindakan</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nisn }}</a></td>
                                <td>{{ $item->kelas_id }}</a></td>
                                <td>{{ $item->nama_siswa }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                {{-- <td>{{ $item->agama }}</td>
                                <td>{{ $item->alamat }}</td>--}}
                                <td>{{ $item->user->email }}</td>
                                <td class="text-center">
                                    <div class="form-button-action d-flex d-row">
                                        <a class="btn btn-sm btn-info waves-effect waves-light" href="{{ route('siswa.show', $item->id) }}"><i class="fa fa-info-circle"></i></a>
                                        <a class="btn btn-sm btn-primary waves-effect waves-light" href="{{ route('siswa.edit', $item->id) }}"><i class="fa fa-pencil-alt"></i></a>
                                        <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button class="btn btn-sm btn-danger waves-effect waves-light"><i class="far fa-trash-alt"></i></button>
                                        </form>
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
