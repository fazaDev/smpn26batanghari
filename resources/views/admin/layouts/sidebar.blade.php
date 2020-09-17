<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title text-center">e-learning smpn26 batanghari</li>
                <p class="menu-title text-center">Anda login sebagai {{ Auth::user()->role }}</p>
                <hr>
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span> Dashboard </span>
                    </a>
                </li>

                @if(Auth::user()->role == 'admin')
                <li>
                    <a href="{{ route('kelas.index') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i> <span> Kelas </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('siswa.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-multiple-outline"></i> <span> Siswa </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('guru.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-star"></i> <span> Guru </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('orang-tua.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-switch"></i> <span> Orang Tua </span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->role == 'siswa')
                <li>
                    <a href="{{ route('materi.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-switch"></i> <span> Materi </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('latihan.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-switch"></i> <span> Latihan </span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->role == 'guru')
                <li>
                    <a href="{{ route('guru-materi.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-switch"></i> <span> Materi </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('guru-latihan.index') }}" class="waves-effect">
                        <i class="mdi mdi-account-switch"></i> <span> Latihan </span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->role == 'orangtua')
                <li>
                    <a href="{{ route('lihat-nilai') }}" class="waves-effect">
                        <i class="mdi mdi-account-switch"></i> <span> Lihat Nilai Anak </span>
                    </a>
                </li>
                @endif
                {{-- <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-database"></i><span> Manajemen <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('siswa.index') }}" class="waves-effect">
                                <i class="mdi mdi-road-variant"></i><span> Siswa </span>
                            </a>
                        </li>

                    </ul>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
