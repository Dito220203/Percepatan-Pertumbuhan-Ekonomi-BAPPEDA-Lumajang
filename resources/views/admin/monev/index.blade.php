@extends('component.layout')

@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Monitoring Evaluasi</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Monitoring Evaluasi</h6>
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
     <!-- End Navbar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
  {{-- --- aksi buka kunci --- --}}
                    @if (Auth::guard('pengguna')->user()->level === 'Super Admin' && isset($allOpds) && $allOpds->isNotEmpty())
                        <div class="card-body pt-3">
                            <h5 class="card-title" style="padding: 0 !important; margin-bottom: 5px;">Aksi Kunci
                                Data per OPD</h5>
                            <form action="{{ route('monev.bulk-lock') }}" method="POST" id="bulk-lock-form">
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6>Tabel Monitoring Evaluasi</h6>
                        {{-- <a href="{{ route('rencanaAksi.export.excel', request()->query()) }}" class="btn btn-success btn-sm mb-0">
                            <i class="fa-solid fa-file-excel me-1"></i>
                            Export Excel
                        </a> --}}
                        <a href="{{ route('rencanaAksi.create') }}" class="btn btn-primary btn-sm mb-0">
                            <i class="fa-solid fa-plus me-1"></i>
                            Tambah Data
                        </a>
                    </div>


                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                @php
                                    $adaPesan = $monev->contains(function ($item) {
                                        return !empty($item->pesan);
                                    });
                                @endphp
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                            No</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Strategi</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Rencana Aksi / Aktivitas</th>
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
                                            Dokumen Anggaran</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Realisasi Anggaran</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Volume Realisasi</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Satuan Volume</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Keterangan</th>
                                        @if ($adaPesan)
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Catatan</th>
                                        @endif
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Dokumentasi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="dataTabelBody">
                                    @foreach ($monev as $data)
                                        <tr id="row-{{ $data->id }}">
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->subprogram->subprogram ?? '-' }}
                                            </td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->rencanakerja->rencana_aksi ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->rencanakerja->sub_kegiatan ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->rencanakerja->kegiatan ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->rencanakerja->nama_program ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->rencanakerja->lokasi ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->rencanakerja->volume ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->rencanakerja->satuan ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->rencanakerja->tahun ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->opd->nama ?? '-' }}
                                            </td>
                                            @php
                                                $anggarans = explode('; ', $data->anggaran);
                                                $sumberdanas = explode('; ', $data->sumberdana);
                                            @endphp

                                            {{-- Cek untuk Kolom Anggaran --}}
                                            @if (count($anggarans) > 1)
                                                {{-- Jika data lebih dari satu, gunakan tampilan multi-baris --}}
                                                <td
                                                    class="text-sm font-weight-bold mb-0 multi-item text-center align-middle">
                                                    @foreach ($anggarans as $anggaran)
                                                        <div>{{ $anggaran ?: '-' }}</div>
                                                    @endforeach
                                                </td>
                                            @else
                                                {{-- Jika data hanya satu, tampilkan seperti biasa --}}
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->anggaran ?: '-' }}
                                                </td>
                                            @endif

                                            {{-- Cek untuk Kolom Sumber Dana --}}
                                            @if (count($sumberdanas) > 1)
                                                {{-- Jika data lebih dari satu, gunakan tampilan multi-baris --}}
                                                <td
                                                    class="text-sm font-weight-bold mb-0 multi-item text-center align-middle">
                                                    @foreach ($sumberdanas as $sumber)
                                                        <div>{{ $sumber ?: '-' }}</div>
                                                    @endforeach
                                                </td>
                                            @else
                                                {{-- Jika data hanya satu, tampilkan seperti biasa --}}
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->sumberdana ?: '-' }}
                                                </td>
                                            @endif


                                            {{-- kolom status --}}
                                            <td class="text-sm font-weight-bold mb-0">
                                                @if ($data->status === 'Valid')
                                                    <span class="badge bg-success">{{ $data->status }}</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ $data->status }}</span>
                                                @endif
                                            </td>

                                            @php
                                                // Definisikan array pemetaan angka ke Romawi di sini
                                                // Indeks 0 sengaja dikosongkan agar $romanMap[1] menjadi 'I'
                                                $romanMap = ['', 'I', 'II', 'III', 'IV'];
                                            @endphp

                                            {{-- Kolom Dokumen Anggaran (Tidak perlu diubah, sudah benar) --}}
                                            <td class="text-sm font-weight-bold mb-0">
                                                @forelse (($data->dokumen_anggaran ?? []) as $status)
                                                    @if ($status && str_contains($status, 'ADA'))
                                                        <span
                                                            class="badge bg-success d-block mb-1">{{ $status }}</span>
                                                    @elseif ($status)
                                                        <span
                                                            class="badge bg-danger d-block mb-1">{{ $status }}</span>
                                                    @endif
                                                @empty
                                                    <span>-</span>
                                                @endforelse
                                            </td>

                                            {{-- Kolom Realisasi (Diperbaiki dengan Flexbox) --}}
                                            <td class="text-sm font-weight-bold mb-0">
                                                @if (is_array($data->realisasi))
                                                    @foreach ($data->realisasi as $triwulan => $nilai)
                                                        @if ($nilai)
                                                            {{-- Bungkus setiap baris dengan div dan gunakan flex --}}
                                                            <div style="display: flex; align-items: baseline;">
                                                                {{-- Atur lebar tetap untuk label --}}
                                                                <span style="width: 55px; display: inline-block;">
                                                                    TW {{ $romanMap[$triwulan] ?? $triwulan }}
                                                                </span>
                                                                <span>:</span>
                                                                {{-- Beri sedikit jarak kiri --}}
                                                                <span style="margin-left: 5px;">{{ $nilai }}</span>

                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    {{ $data->realisasi }}
                                                @endif
                                            </td>

                                            {{-- Kolom Volume realisasi (Diperbaiki dengan Flexbox) --}}
                                            <td class="text-sm font-weight-bold mb-0">
                                                @if (is_array($data->volumeTarget))
                                                    @foreach ($data->volumeTarget as $triwulan => $nilai)
                                                        @if ($nilai)
                                                            <div style="display: flex; align-items: baseline;">
                                                                <span style="width: 55px; display: inline-block;">
                                                                    TW {{ $romanMap[$triwulan] ?? $triwulan }}
                                                                </span>
                                                                <span>:</span>
                                                                <span style="margin-left: 5px;">{{ $nilai }}</span>

                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    {{ $data->volumeTarget }}
                                                @endif
                                            </td>

                                            {{-- Kolom Satuan Realisasi (Diperbaiki dengan Flexbox) --}}
                                            <td>
                                                @if (is_array($data->satuan_realisasi))
                                                    @foreach ($data->satuan_realisasi as $triwulan => $nilai)
                                                        @if ($nilai)
                                                            <div style="display: flex; align-items: baseline;">
                                                                <span style="width: 55px; display: inline-block;">
                                                                    TW {{ $romanMap[$triwulan] ?? $triwulan }}
                                                                </span>
                                                                <span>:</span>
                                                                <span style="margin-left: 5px;">{{ $nilai }}</span>

                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    {{ $data->satuan_realisasi }}
                                                @endif
                                            </td>
                                            {{-- kolom uraian --}}
                                            <td class="text-sm font-weight-bold mb-0">
                                                @if (is_array($data->uraian))
                                                    @foreach ($data->uraian as $triwulan => $nilai)
                                                        @if ($nilai)
                                                            <div style="display: flex; align-items: baseline;">
                                                                <span style="width: 55px; display: inline-block;">
                                                                    TW {{ $romanMap[$triwulan] ?? $triwulan }}
                                                                </span>
                                                                <span>:</span>
                                                                <span style="margin-left: 5px;">{{ $nilai }}</span>

                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    {{ $data->uraian }}
                                                @endif
                                            </td>
                                            @if ($adaPesan)
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->pesan }}</td>
                                            @endif

                                            {{-- Tombol Lihat Dokumentasi --}}
                                            <td class="text-sm font-weight-bold mb-0">
                                                <button type="button" class="btn btn-tambah-utama "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#ModalDetailProduk{{ $data->id }}">
                                                    Lihat Dokumentasi
                                                </button>
                                            </td>






                                            <td class="text-center align-middle">
                                                <div class="d-flex justify-content-center gap-1">
                                                    <button type="button" class="btn btn-success btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#uploadFotoModal"
                                                        data-id="{{ $data->id }}">
                                                        <i class="fas fa-camera"></i> Upload
                                                    </button>

                                                    @if ($data->is_locked)
                                                        {{-- Jika terkunci, tombol dinonaktifkan --}}
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            onclick="showLockedAlert()">
                                                            <i class="fas fa-lock"></i> Edit/Lengkapi
                                                        </button>
                                                    @else
                                                        {{-- Jika tidak terkunci, tombol berfungsi normal --}}
                                                        <form action="{{ route('monev.edit', $data->id) }}"
                                                            method="GET" style="display:inline;">
                                                            <button class="btn btn-primary">
                                                                <i class="fas fa-edit"></i> Edit/Lengkapi
                                                            </button>
                                                        </form>
                                                    @endif
                                                    @push('scripts')
                                                        <script src="{{ asset('js/kunciMonev.js') }}"></script>
                                                    @endpush

                                                    @if (auth()->guard('pengguna')->user()->level == 'Super Admin')
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
                                                            action="{{ route('monev.validasi', $data->id) }}"
                                                            method="POST" style="display:none;">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="">
                                                        </form>
                                                        <button type="button" class="btn btn-tambah-utama "
                                                            data-bs-toggle="modal" data-bs-target="#modalPesan"
                                                            data-id="{{ $data->id }}"
                                                            data-pesan="{{ $data->pesan ?? '' }}">
                                                            <i class="fa-solid fa-envelope"></i>
                                                        </button>
                                                    @endif



                                                    {{-- Tombol Delete --}}
                                                    <form id="formDelete-{{ $data->id }}"
                                                        action="{{ route('monev.delete', $data->id) }}" method="POST"
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
    {{-- Modal Anggaran dan Sumberdana --}}
    <div class="modal fade" id="anggaranModal" tabindex="-1" aria-labelledby="anggaranModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="anggaranModalLabel">Tambah Anggaran Dan Sumber Dana</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="modal-anggaran-form">
                        <div class="mb-3">
                            <label for="modal-anggaran" class="form-label">Anggaran</label>
                            <input type="text" id="modal-anggaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="modal-sumberdana" class="form-label">Sumber Dana</label>
                            <select id="modal-sumberdana" class="form-select" required>
                                <option value="">-- Pilih Sumber Dana --</option>
                                <option value="APBN">APBN</option>
                                <option value="DAK">DAK</option>
                                <option value="APBD Kab">APBD Kab</option>
                                <option value="APBD Prov">APBD Prov</option>
                                <option value="BK Prov">BK Prov</option>
                                <option value="DBHCHT">DBHCHT</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3" id="modal-sumberdana-lainnya-container" style="display: none;">
                            <label for="modal-sumberdana-lainnya" class="form-label">Sumber Dana Lainnya</label>
                            <input type="text" id="modal-sumberdana-lainnya" class="form-control"
                                placeholder="Masukkan sumber dana lainnya">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="tambah-ke-tabel">Tambah ke Tabel</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal untuk Data Triwulan --}}
    <div class="modal fade" id="triwulanModal" tabindex="-1" aria-labelledby="triwulanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="triwulanModalLabel">Tambah Data Realisasi Triwulan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="modal-triwulan-form">
                        <div class="mb-3">
                            <label for="modal-triwulan-select" class="form-label">Pilih Triwulan</label>
                            <select id="modal-triwulan-select" class="form-select" required>
                                <option value="">-- Pilih Triwulan --</option>
                                <option value="1">Triwulan I</option>
                                <option value="2">Triwulan II</option>
                                <option value="3">Triwulan III</option>
                                <option value="4">Triwulan IV</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dokumen Anggaran
                                <span id="dokumen-anggaran-label-suffix" class="badge bg-secondary ms-2">RKA</span>
                            </label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="modal_dokumen_anggaran"
                                        id="modal_dokumen_ada" value="ADA" checked>
                                    <label class="form-check-label" for="modal_dokumen_ada">ADA</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="modal_dokumen_anggaran"
                                        id="modal_dokumen_tidak" value="TIDAK">
                                    <label class="form-check-label" for="modal_dokumen_tidak">TIDAK</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="modal-realisasi" class="form-label">Realisasi Anggaran</label>
                            <input type="text" id="modal-realisasi" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="modal-volume" class="form-label">Volume Realisasi</label>
                            <input type="text" id="modal-volume" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="modal-satuan" class="form-label">Satuan Volume</label>
                            <input type="text" id="modal-satuan" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="modal-keterangan" class="form-label">Keterangan</label>
                            <textarea id="modal-keterangan" class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="tambah-triwulan-ke-tabel">Tambah ke Tabel</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal detail --}}
    @foreach ($monev as $data)
        <div class="modal fade" id="ModalDetailProduk{{ $data->id }}" tabindex="-1"
            aria-labelledby="DetailLabel{{ $data->id }}" aria-hidden="true">
            <div class="modal-dialog modal-super-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header card-dashboard text-white">
                        <h5 class="modal-title" id="DetailLabel{{ $data->id }}">
                            <i class="bi bi-info-circle me-2"></i>Detail Monitoring &
                            Evaluasi
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">

                            <div class="col-md-6">
                                <div class="keterangan-panjang">
                                    <h6 class="mb-3 text-hijau-kustom fw-bold"><i class="bi bi-list   me-2"></i>Detail
                                        Dokumentasi</h6>
                                    <div>
                                        <h6 class="mb-2 text-hijau-kustom fw-bold"><i
                                                class="bi bi-card-text text-hijau-kustom me-2"></i>Keterangan
                                        </h6>

                                        <div class="keterangan-box">
                                            <p>
                                                @if ($data->fotoProgres->isNotEmpty())
                                                    {{ $data->fotoProgres->first()->deskripsi ?: 'Tidak ada uraian.' }}
                                                @else
                                                    <span class="text-hijau-kustom fst-italic">Tidak
                                                        ada uraian</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-3 text-hijau-kustom fw-bold"><i
                                            class="bi bi-geo-alt-fill me-2"></i>Lokasi
                                        Peta</h6>
                                    @if ($data->map && $data->map->latitude && $data->map->longitude)
                                        <div id="detailMap{{ $data->id }}" class="peta-container rounded shadow-sm"
                                            data-latitude="{{ $data->map->latitude }}"
                                            data-longitude="{{ $data->map->longitude }}">
                                        </div>
                                    @else
                                        <div class="alert alert-light text-hijau-kustom placeholder-container">
                                            <i class="bi bi-map text-hijau-kustom placeholder-icon"></i>
                                            <p class="mb-0 mt-3 text-hijau-kustom">Lokasi belum
                                                ditandai</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h6 class="mb-3 text-hijau-kustom fw-bold"><i
                                        class="bi bi-images text-hijau-kustom me-2"></i>Dokumentasi
                                    Foto</h6>
                                <div class="foto-container-scrollable">
                                    @if ($data->fotoProgres->isNotEmpty())
                                        <div class="row g-3">
                                            @foreach ($data->fotoProgres as $foto)
                                                <div class="col-12">
                                                    <a href="{{ asset('storage/' . $foto->foto) }}" target="_blank"
                                                        class="d-block hover-effect">
                                                        <img src="{{ asset('storage/' . $foto->foto) }}"
                                                            alt="Foto Progres" class="galeri-foto-item">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="alert alert-light text-center m-0 placeholder-container">
                                            <i class="bi bi-image text-hijau-kustom placeholder-icon"></i>
                                            <p class="mb-0 mt-2 text-hijau-kustom">Belum ada foto
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-2"></i>Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- modal aplud --}}
    <div class="modal fade" id="uploadFotoModal" tabindex="-1" aria-labelledby="uploadFotoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form id="uploadFotoForm" method="POST" action="{{ route('foto-progres.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="monev_id" id="monev_id_input">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadFotoModalLabel">Upload Foto Dokumentasi & Lokasi
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="dropZone" class="drop-zone mb-3">
                            <div class="drop-zone-content">
                                <i class="bi bi-cloud-arrow-up"></i>
                                <p class="mb-1"><strong>Upload gambar progres</strong></p>
                                <p class="text-muted small">Drag & drop atau klik (JPG, PNG, Maks 2MB)</p>
                            </div>
                            <input type="file" id="fileInput" name="foto[]" accept="image/*" multiple
                                style="display: none;" required>
                        </div>

                        <div id="previewContainer" class="mb-3">
                        </div>
                        <div class="form-group mb-4">
                            <label for="deskripsi_input" class="form-label">Uraian</label>
                            <textarea name="deskripsi" id="deskripsi_input" class="form-control" placeholder="Masukkan keterangan..."
                                rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tandai Lokasi di Peta</label>
                            <div id="map" style="height: 300px; width: 100%; border-radius: 8px; z-index: 0;">
                            </div>
                            <input type="hidden" name="latitude" id="latitude">
                            <input type="hidden" name="longitude" id="longitude">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Pesan (satu saja, di luar foreach) -->
    <div class="modal fade" id="modalPesan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="formPesan" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_monev" id="idMonev">

                    <div class="modal-header">
                        <h5 class="modal-title">Kirim Catatan ke Admin Perangkat Daerah
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Catatan</label>
                            <textarea name="pesan" id="inputPesan" class="form-control" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        {{-- Script untuk auto-submit filter tahun --}}
        <script>
            $(document).ready(function() {
                $('#tahun-filter').on('change', function() {
                    $('#filter-form').submit();
                });
            });
        </script>

        {{-- Script untuk fungsionalitas MODAL UPLOAD --}}
        <script>
            $(document).ready(function() {
                const dropZone = document.getElementById('dropZone');
                const fileInput = document.getElementById('fileInput');
                const previewContainer = document.getElementById('previewContainer');
                const deskripsiInput = document.getElementById('deskripsi_input');
                let filesArray = [];

                let map;
                let marker;
                const defaultLat = -8.1689; // Ganti dengan koordinat default Anda
                const defaultLng = 113.223;
                const latInput = $('#latitude');
                const lngInput = $('#longitude');

                $('#uploadFotoModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    var monevId = button.data('id');
                    $(this).find('#monev_id_input').val(monevId);
                });

                $('#uploadFotoModal').on('shown.bs.modal', function() {
                    if (!map) {
                        map = L.map('map').setView([defaultLat, defaultLng], 13);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; OpenStreetMap'
                        }).addTo(map);
                        marker = L.marker([defaultLat, defaultLng], {
                            draggable: true
                        }).addTo(map);
                        latInput.val(defaultLat);
                        lngInput.val(defaultLng);

                        const searchControl = new GeoSearch.GeoSearchControl({
                            provider: new GeoSearch.OpenStreetMapProvider(),
                            style: 'bar',
                            autoClose: true,
                            keepResult: true,
                            searchLabel: 'Cari lokasi...'
                        });
                        map.addControl(searchControl);

                        map.on('click', e => {
                            marker.setLatLng(e.latlng);
                            latInput.val(e.latlng.lat);
                            lngInput.val(e.latlng.lng);
                        });

                        marker.on('dragend', e => {
                            const pos = e.target.getLatLng();
                            latInput.val(pos.lat);
                            lngInput.val(pos.lng);
                        });

                        map.on('geosearch/showlocation', result => {
                            const pos = L.latLng(result.location.y, result.location.x);
                            marker.setLatLng(pos);
                            latInput.val(result.location.y);
                            lngInput.val(result.location.x);
                        });
                    }
                    setTimeout(() => map.invalidateSize(), 10);
                });

                $('#uploadFotoModal').on('hidden.bs.modal', function() {
                    filesArray = [];
                    previewContainer.innerHTML = '';
                    fileInput.value = '';
                    deskripsiInput.value = '';

                    if (marker) {
                        const defaultLatLng = L.latLng(defaultLat, defaultLng);
                        marker.setLatLng(defaultLatLng);
                        map.setView(defaultLatLng, 13);
                        latInput.val(defaultLat);
                        lngInput.val(defaultLng);
                    }
                });

                dropZone.addEventListener('click', () => fileInput.click());
                dropZone.addEventListener('dragover', e => {
                    e.preventDefault();
                    dropZone.classList.add('drag-over');
                });
                dropZone.addEventListener('dragleave', () => dropZone.classList.remove('drag-over'));
                dropZone.addEventListener('drop', e => {
                    e.preventDefault();
                    dropZone.classList.remove('drag-over');
                    handleFiles(Array.from(e.dataTransfer.files));
                });
                fileInput.addEventListener('change', e => handleFiles(Array.from(e.target.files)));

                function handleFiles(files) {
                    files.forEach(file => {
                        if (!file.type.startsWith('image/') || file.size > 2 * 1024 * 1024) {
                            alert('Hanya file gambar (JPG, PNG) maks 2MB.');
                            return;
                        }
                        filesArray.push({
                            file: file,
                            id: Date.now() + Math.random()
                        });
                    });
                    renderPreviews();
                }

                function renderPreviews() {
                    previewContainer.innerHTML = '';
                    previewContainer.style.display = 'grid';
                    previewContainer.style.gridTemplateColumns = 'repeat(auto-fill, minmax(100px, 1fr))';
                    previewContainer.style.gap = '10px';
                    filesArray.forEach(item => {
                        const reader = new FileReader();
                        reader.onload = e => {
                            previewContainer.insertAdjacentHTML('beforeend',
                                `<div style="position: relative;"><img src="${e.target.result}" style="width: 100%; height: 100px; object-fit: cover; border-radius: 4px;"><button type="button" class="btn btn-danger btn-sm" onclick="removeFile(${item.id})" style="position: absolute; top: 5px; right: 5px; line-height: 1; padding: 2px 5px; border-radius: 50%;">&times;</button></div>`
                            );
                        };
                        reader.readAsDataURL(item.file);
                    });
                    updateFileInput();
                }

                function updateFileInput() {
                    const dt = new DataTransfer();
                    filesArray.forEach(item => dt.items.add(item.file));
                    fileInput.files = dt.files;
                }
                window.removeFile = id => {
                    filesArray = filesArray.filter(item => item.id != id);
                    renderPreviews();
                };
            });
        </script>

        {{-- Script untuk fungsionalitas MODAL DETAIL --}}
        <script>
            document.addEventListener('shown.bs.modal', function(event) {
                const modal = event.target;
                const mapContainer = modal.querySelector('.peta-container');
                if (!mapContainer || mapContainer._leaflet_id) return;

                const lat = mapContainer.dataset.latitude;
                const lng = mapContainer.dataset.longitude;
                const mapId = mapContainer.id;

                const detailMap = L.map(mapId, {
                    center: [lat, lng],
                    zoom: 15,
                    scrollWheelZoom: false,
                    dragging: false,
                    zoomControl: true
                });
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap'
                }).addTo(detailMap);
                L.marker([lat, lng]).addTo(detailMap);

                setTimeout(() => detailMap.invalidateSize(), 200);
            });
        </script>
        {{-- Script untuk fungsionalitas MODAL PESAN --}}

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var modalPesan = document.getElementById('modalPesan');
                modalPesan.addEventListener('show.bs.modal', function(event) {
                    var button = event.relatedTarget;
                    var idMonev = button.getAttribute('data-id');
                    var pesan = button.getAttribute('data-pesan') || '';

                    // isi hidden input
                    modalPesan.querySelector('#idMonev').value = idMonev;

                    // isi textarea dengan pesan lama (kalau ada)
                    modalPesan.querySelector('#inputPesan').value = pesan;

                    // set action form ke route updatePesan
                    var form = modalPesan.querySelector('#formPesan');
                    form.action = "/monev/" + idMonev + "/pesan";
                });
            });
        </script>
    @endpush

@endsection
