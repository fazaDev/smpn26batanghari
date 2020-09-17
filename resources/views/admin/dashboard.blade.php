@extends('admin.layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Welcome to Lexa Dashboard
                    </li>
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
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-road-variant float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Kelas</h6>
                        <h4 class="mb-4">{{ $kelas }}</h4>
                        {{-- <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-ruler float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Guru</h6>
                        <h4 class="mb-4">{{ $guru }}</h4>
                        {{-- <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous period</span> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-thumb-up float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Siswa</h6>
                        <h4 class="mb-4">{{ $siswa }}</h4>
                        {{-- <span class="badge badge-warning"> 0% </span> <span class="ml-2">From previous period</span> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-thumb-down float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Orang Tua</h6>
                        <h4 class="mb-4">{{  $ortu }}</h4>
                        {{-- <span class="badge badge-info"> +89% </span> <span class="ml-2">From previous period</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

</div>
<!-- container-fluid -->
@endsection

@section('script')

@endsection
