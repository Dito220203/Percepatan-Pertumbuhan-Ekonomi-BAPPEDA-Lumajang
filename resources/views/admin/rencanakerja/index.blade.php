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
                        <input id="liveSearchInput" type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
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
                                <div class="row g-2 ">
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
                                        <label class="form-label " style="visibility: hidden">Aksi</label>
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
                         <div class="d-flex align-items-center gap-2">
                            <label for="showEntries">Tampilkan</label>
                            <select id="showEntries" class="form-select form-select-sm" style="width: auto;">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            <span>entri</span>
                        </div>
                        {{-- BARU --}}
                        <div class="d-flex gap-2">
                            <a href="{{ route('rencana.export.excel', request()->query()) }}"
                                class="btn btn-success btn-sm mb-0">
                                <i class="fa-solid fa-file-excel"></i> Export Excel
                            </a>
                            <a href="{{ route('rencana.create') }}" class="btn btn-primary btn-sm mb-0">
                                <i class="fa-solid fa-plus me-1"></i>
                                Tambah Data
                            </a>
                        </div>
                    </div>
                    {{-- Akhir Modifikasi Tombol --}}

                    <div class="card-body px-0 pt-0 pb-2">
                        <div id="dataTable" class="table-responsive p-0">
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
                                                            @endif

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
                         <div class="card-footer py-3">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-sm text-secondary" id="paginationInfo"></div>

                            <div class="col-md-6">
                                <nav class="d-flex justify-content-md-end justify-content-center">
                                    <div id="paginationControls"></div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
