@extends('admin.layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    {{-- <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Welcome to SMPN 26 Batang Hari
                    </li>
                </ol>

            </div>
        </div>
    </div> --}}
    <!-- end row -->

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="text-center">
                <p><h2>----- Selamat Datang di -----</h2></p>
                <p><h3>SMP Negeri 26 BATANG HARI</h3></p>
                <img src="{{asset('assets/smp26-.png')}}" alt="" class="img-responsive logo" >
                <hr>
                <p>
                    <h2> <strong>Visi : </strong>
                    </h2>
                    <h4>
                        "Unggul dalam prestasi, Terampil, Berbudaya dan Beriman"
                    </h4>

                    <h2 > <strong> Misi : </strong>
                    </h2>
                    <h4>
                        1. Menciptakan lulusan yang memiliki kompetensi akademik di atas rata-rata
                        Nasional
                    </h4>
                    <h4>
                        2. Meningkatkan pembinaan dibidang ekstrakurikuler</h4>
                    <h4>
                        3. Meningkatkan profesi guru melalui pembinaan yang berkesinambungan</h4>
                    <h4>
                        4. Meningkatkan sarana dan prasarana sekolah sesuai dengan standar pelayanan
                        minimal</h4>
                    <h4>
                        5. Meningkatkan pembinaan keterampilan siswa sebagai bekal hidup di masyarakat</h4>
                    <h4>
                        6. Menanamkan budaya hidup bersih warga sekolah agar tercipta suasana asri</h4>
                    <h4>
                        7. Meningkatkan pembinaan siswa dalam bidang keagamaan</h4>
                </p>
            </div>
        </div>
    </div>
    <!-- end row -->

</div>
<!-- container-fluid -->
@endsection

@section('script')

@endsection
