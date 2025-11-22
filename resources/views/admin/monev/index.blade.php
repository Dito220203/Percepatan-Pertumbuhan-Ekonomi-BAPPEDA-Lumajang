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
    <div class="container-fluid py-4">
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
                    {{-- Akhir Modifikasi Tombol --}}

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
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Strategi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rencana Aksi / Aktivitas</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sub Kegiatan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kegiatan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Program</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lokasi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Volume Target</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Satuan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tahun</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Perangkat Daerah</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Anggaran</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sumber Dana</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Dokumen Anggaran</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Realisasi Anggaran</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Volume Realisasi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Satuan Volume</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Keterangan</th>
                                        @if ($adaPesan)
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Catatan</th>
                                        @endif
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Dokumentasi</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="dataTabelBody">
                                    @foreach ($monev as $data)
                                        <tr id="row-{{ $data->id }}">
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->subprogram->subprogram ?? '-' }}
                                            </td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencanakerja->rencana_aksi ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencanakerja->sub_kegiatan ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencanakerja->kegiatan ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencanakerja->nama_program ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencanakerja->lokasi ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencanakerja->volume ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencanakerja->satuan ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->rencanakerja->tahun ?? '-' }}</td>
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
                                                <td class="text-sm font-weight-bold mb-0 multi-item text-center align-middle">
                                                    @foreach ($anggarans as $anggaran)
                                                        <div>{{ $anggaran ?: '-' }}</div>
                                                    @endforeach
                                                </td>
                                            @else
                                                {{-- Jika data hanya satu, tampilkan seperti biasa --}}
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->anggaran ?: '-' }}</td>
                                            @endif

                                            {{-- Cek untuk Kolom Sumber Dana --}}
                                            @if (count($sumberdanas) > 1)
                                                {{-- Jika data lebih dari satu, gunakan tampilan multi-baris --}}
                                                <td class="text-sm font-weight-bold mb-0 multi-item text-center align-middle">
                                                    @foreach ($sumberdanas as $sumber)
                                                        <div>{{ $sumber ?: '-' }}</div>
                                                    @endforeach
                                                </td>
                                            @else
                                                {{-- Jika data hanya satu, tampilkan seperti biasa --}}
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->sumberdana ?: '-' }}</td>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Script untuk modal anggaran
            $('#modal-anggaran').on('input', function(e) {
                let value = this.value.replace(/\D/g, '');
                if (value) {
                    this.value = 'Rp. ' + parseInt(value).toLocaleString('id-ID');
                } else {
                    this.value = '';
                }
            });


            // Format otomatis untuk input Realisasi Anggaran di modal Triwulan
            $('#modal-realisasi').on('input', function() {
                let value = this.value.replace(/\D/g, ''); // hanya angka
                if (value) {
                    this.value = 'Rp. ' + parseInt(value).toLocaleString('id-ID');
                } else {
                    this.value = '';
                }
            });


            // Script untuk modal data triwulan
            function updateTriwulanOptions() {
                $('#modal-triwulan-select option').prop('disabled', false);
                $('#triwulan-table-body tr').each(function() {
                    const tw_index = $(this).data('tw');
                    if (tw_index) {
                        $('#modal-triwulan-select option[value="' + tw_index + '"]').prop('disabled', true);
                    }
                });
                let firstAvailable = $('#modal-triwulan-select option:not(:disabled):first');
                $('#modal-triwulan-select').val(firstAvailable.val());
                $('#modal-triwulan-select').trigger('change');
            }

            updateTriwulanOptions();

            $('#modal-triwulan-select').on('change', function() {
                const selectedTw = $(this).val();
                const label = (selectedTw >= 3) ? 'PRKA' : 'RKA';
                $('#dokumen-anggaran-label-suffix').text(label);
            });

            $('#tambah-triwulan-ke-tabel').on('click', function() {
                const tw_index = $('#modal-triwulan-select').val();
                const tw_text = $('#modal-triwulan-select option:selected').text().trim();

                if (!tw_index) {
                    alert('Silakan pilih Triwulan terlebih dahulu.');
                    return;
                }

                const dokumen_status = $('input[name="modal_dokumen_anggaran"]:checked').val();
                const realisasi = $('#modal-realisasi').val();
                const volume = $('#modal-volume').val();
                const satuan = $('#modal-satuan').val();
                const keterangan = $('#modal-keterangan').val();

                const twRoman = ['I', 'II', 'III', 'IV'][tw_index - 1];
                const twLabel = tw_index <= 2 ? 'RKA' : 'PRKA';
                const dokumen_value = `TW ${twRoman} | ${twLabel} | ${dokumen_status}`;

                const uniqueId = 'tw-row-dynamic-' + new Date().getTime();

                // =============================================================
                // PERUBAHAN JAVASCRIPT UNTUK TAMPILAN DATA BARU
                // =============================================================
                const dokumenDisplayText = `<strong>${twLabel} = ${dokumen_status}</strong>`;

                const tableRow = `
                    <tr id="${uniqueId}" data-tw="${tw_index}">
                        <td class="text-center"><strong>${tw_text}</strong></td>
                        <td class="text-center">${dokumenDisplayText}</td>
                        <td class="text-center">${realisasi || '-'}</td>
                        <td class="text-center">${volume || '-'}</td>
                        <td class="text-center">${satuan || '-'}</td>
                        <td>${keterangan || '-'}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger btn-sm hapus-triwulan-row" data-target="hidden-${uniqueId}">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                `;

                const hiddenInputs = `
                    <div id="hidden-${uniqueId}">
                        <input type="hidden" name="dokumen_anggaran[${tw_index}]" value="${dokumen_value}">
                        <input type="hidden" name="realisasi[${tw_index}]" value="${realisasi}">
                        <input type="hidden" name="volumeTarget[${tw_index}]" value="${volume}">
                        <input type="hidden" name="satuan_realisasi[${tw_index}]" value="${satuan}">
                        <input type="hidden" name="uraian[${tw_index}]" value="${keterangan}">
                    </div>
                `;

                $('#triwulan-table-body').append(tableRow);
                $('#hidden-triwulan-inputs').append(hiddenInputs);

                $('#modal-triwulan-form')[0].reset();
                $('#triwulanModal').modal('hide');
                updateTriwulanOptions();
            });

            $('#triwulan-table-body').on('click', '.hapus-triwulan-row', function() {
                const targetId = $(this).data('target');
                $(this).closest('tr').remove();
                $('#' + targetId).remove();
                updateTriwulanOptions();
            });
        });
    </script>
@endsection

