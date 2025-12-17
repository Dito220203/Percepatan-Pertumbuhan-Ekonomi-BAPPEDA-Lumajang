<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main" data-color="primary">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" target="_blank">
            <img src="{{ asset('assets/img/logo-kabupaten.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">P2 Ekonomi</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    {{-- <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main"> --}}
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-house "></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

             @if (auth()->guard('pengguna')->user()->level == 'Super Admin')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('subprogram') ? 'active' : '' }}" href="{{route('subprogram')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bullseye text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Strategi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rencana6tahun') ? 'active' : '' }}" href="{{route('rencana6tahun')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-list-check text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Rencana Aksi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rencanakerja') ? 'active' : '' }}" href="{{route('rencanakerja')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-briefcase text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Rencana Kerja</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('monev') ? 'active' : '' }}" href="{{route('monev')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-magnifying-glass-chart text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Monitoring Evaluasi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('progres') ? 'active' : '' }}" href="{{route('progres')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bars-progress text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Progres Kegiatan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('regulasi') ? 'active' : '' }}" href="{{route('regulasi')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-book-open text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Regulasi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('pengguna') ? 'active' : '' }}" href="{{route('pengguna')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-users text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pengguna</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('opd') ? 'active' : '' }}" href="{{route('opd')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-building-columns text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Opd</span>
                </a>
            </li>





            @elseif (auth()->guard('pengguna')->user()->level == 'Admin')
             <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rencana6tahun') ? 'active' : '' }}" href="{{route('rencana6tahun')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-list-check text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Rencana Aksi</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rencanakerja') ? 'active' : '' }}" href="{{route('rencanakerja')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-briefcase text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Rencana Kerja</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('monev') ? 'active' : '' }}" href="{{route('monev')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-magnifying-glass-chart text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Monitoring Evaluasi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('progres') ? 'active' : '' }}" href="{{route('progres')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bars-progress text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Progres Kegiatan</span>
                </a>
            </li>

            @endif

            <li class="nav-item">
               <a class="nav-link collapsed" data-bs-target="#modalGantiPassword" data-bs-toggle="modal">
                   <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                       <i class="fa-solid fa-key text-dark"></i>
                   </div>
                   <span class="nav-link-text ms-1">Ganti Password</span>
               </a>
           </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('logout') ? 'active' : '' }}" href="{{route('logout')}}" wire:navigate>
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-right-from-bracket text-dark"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
