@extends('component.layout')

@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Rencana Kerja</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Rencana Kerja</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">

                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    {{-- --- aksi buka kunci --- --}}
                    @if (Auth::guard('pengguna')->user()->level === 'Super Admin' && isset($allOpds) && $allOpds->isNotEmpty())
                        <div class="card-body pt-3">
                            <h5 class="card-title" style="padding: 0 !important; margin-bottom: 5px;">Aksi Kunci
                                Data per OPD</h5>
                            <form action="{{ route('renja.bulk-lock') }}" method="POST" id="bulk-lock-form">
                                @csrf
                                @method('PUT')
                                <div class="row g-2 align-items-end">
                                    {{-- Dropdown Pilih OPD --}}
                                    <div class="col-md-5">
                                        <label for="opd_id_filter" class="form-label">Perangkat Daerah</label>
                                        <select name="opd_id" id="opd_id_filter" class="form-select form-select-sm"
                                            required>
                                            <option value="" selected disabled>-- Pilih Perangkat Daerah --
                                            </option>
                                            @foreach ($allOpds as $opd)
                                                <option value="{{ $opd->id }}">{{ $opd->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- Dropdown Pilih Aksi --}}
                                    <div class="col-md-4">
                                        <label for="action_filter" class="form-label">Aksi</label>
                                        <select name="action" id="action_filter" class="form-select form-select-sm"
                                            required>
                                            <option value="" selected disabled>-- Pilih Aksi --</option>
                                            <option value="lock">Kunci Semua Data</option>
                                            <option value="unlock">Buka Semua Kunci</option>
                                        </select>
                                    </div>

                                    {{-- Tombol Terapkan --}}
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-danger btn-sm w-100">
                                            <i class="fas fa-play me-1"></i> Terapkan Aksi
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- End Navbar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6>Tabel Rencana Kerja</h6>
                        {{-- <a href="{{ route('rencanaAksi.export.excel', request()->query()) }}" class="btn btn-success btn-sm mb-0">
                            <i class="fa-solid fa-file-excel me-1"></i>
                            Export Excel
                        </a> --}}
                        <a href="{{ route('rencana.create') }}" class="btn btn-primary btn-sm mb-0">
                            <i class="fa-solid fa-plus me-1"></i>
                            Tambah Data
                        </a>
                    </div>
                    {{-- Akhir Modifikasi Tombol --}}

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                            No</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Strategi</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Rencana Aksi/Aktivitas</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Sub Kegiatan</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Kegiatan</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Program</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Lokasi</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Volume Target</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Satuan</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tahun</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Perangkat Daerah</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Anggaran</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Sumber Dana</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Keterangan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Aksi</th>
                                    </tr>
                                </thead>

                                <tbody id="dataTabelBody">
                                    @foreach ($rencana as $data)
                                        <tr id="row-{{ $data->id }}"
                                            class="{{ $data->input === 'manual' ? 'highlight-manual-renja' : '' }}">

                                            <td class="text-center">
                                                {{ $loop->iteration }}
                                            </td>

                                            </td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->subprogram->subprogram ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencana_aksi }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->sub_kegiatan }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->kegiatan }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->nama_program }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->lokasi }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->volume }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->satuan }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->tahun }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->opd->nama ?? '-' }}</td>

                                            @php
                                                $anggarans = explode('; ', $data->anggaran);
                                                $sumberdanas = explode('; ', $data->sumberdana);
                                            @endphp

                                            @if (count($anggarans) > 1)
                                                <td class="text-sm font-weight-bold mb-0 multi-item-rensi align-middle">
                                                    @foreach ($anggarans as $anggaran)
                                                        <div>{{ $anggaran ?: '-' }}</div>
                                                    @endforeach
                                                </td>
                                            @else
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->anggaran ?: '-' }}
                                                </td>
                                            @endif

                                            @if (count($sumberdanas) > 1)
                                                <td class="text-sm font-weight-bold mb-0 multi-item-rensi align-middle">
                                                    @foreach ($sumberdanas as $sumber)
                                                        <div>{{ $sumber ?: '-' }}</div>
                                                    @endforeach
                                                </td>
                                            @else
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->sumberdana ?: '-' }}
                                                </td>
                                            @endif


                                            <td class="text-sm font-weight-bold mb-0">
                                                @if ($data->status === 'Valid')
                                                    <span class="badge bg-success">{{ $data->status }}</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ $data->status }}</span>
                                                @endif
                                            </td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->keterangan ?? '-' }}</td>
                                            <td class="text-center text-sm font-weight-bold mb-0">
                                                <div class="d-flex justify-content-center gap-1">
                                                    @if (Auth::guard('pengguna')->user()->level === 'Super Admin')
                                                        <button
                                                            class="btn btn-sm {{ $data->status == 'Valid' ? 'btn-warning' : 'btn-success' }}"
                                                            onclick="updateStatus('{{ $data->id }}', '{{ $data->status }}')">
                                                            @if ($data->status == 'Valid')
                                                                Batalkan
                                                            @else
                                                                Validasi
                                                            @endif
                                                        </button>

                                                        <form id="form-status-{{ $data->id }}"
                                                            action="{{ route('rencana.validasi', $data->id) }}"
                                                            method="POST" style="display:none;">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="">
                                                        </form>
                                                         @if ($data->is_locked)
                                                                {{-- Jika terkunci, tombol dinonaktifkan --}}
                                                                <button type="button" class="btn btn-secondary"
                                                                    onclick="showLockedAlert()">
                                                                     <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                            @else
                                                                {{-- Jika tidak terkunci, tombol berfungsi normal --}}
                                                                <form action="{{ route('rencana.edit', $data->id) }}"
                                                                    method="GET" style="display:inline;">
                                                                    <button class="btn btn-primary">
                                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                                    </button>
                                                                </form>
                                                            @endif
                                                            @push('scripts')
                                                                <script src="{{ asset('js/kunciMonev.js') }}"></script>
                                                            @endpush
                                                    @endif

                                                    <form id="formDelete-{{ $data->id }}"
                                                        action="{{ route('rencana.delete', $data->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="confirmDelete('{{ $data->id }}')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
