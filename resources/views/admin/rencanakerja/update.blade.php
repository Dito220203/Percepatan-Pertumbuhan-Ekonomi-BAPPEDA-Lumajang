@extends('component.layout')

@section('content')
    {{-- BAR NAVIGASI ATAS --}}
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark" aria-current="page">Rencana Kerja</li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ubah Data</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Ubah Rencana Kerja</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">

                    </div>
                </div>
                <ul class="navbar-nav justify-content-end">
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
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Contoh Notifikasi</span>
                                            </h6>
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
    {{-- AKHIR BAR NAVIGASI ATAS --}}

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Form Ubah Rencana Aksi</h6>
                        <a href="{{ route('rencanakerja') }}" class="btn btn-secondary btn-sm mb-0">
                            <i class="fa-solid fa-arrow-left me-1"></i>
                            Kembali ke Tabel
                        </a>
                    </div>
                    <div class="card-body px-4 pt-0 pb-2">

                        {{-- Tampilkan Error Validasi --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- Akhir Tampilkan Error Validasi --}}

                        <form action="{{ route('rencana.update', $rencana->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- Bagian Atas Form --}}
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Strategi</label>
                                    <select name="sub_program" class="form-select" required>
                                        <option value="">-- Pilih Strategi --</option>
                                        @foreach ($subprogram as $data)
                                            <option value="{{ $data->id }}"
                                                {{ $data->id == $rencana->id_subprogram ? 'selected' : '' }}>
                                                {{ $data->subprogram }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Rencana Aksi / Aktivitas</label>
                                    <input type="text" name="rencanaAksi" class="form-control"
                                        value="{{ old('rencanaAksi', $rencana->rencana_aksi) }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Sub Kegiatan</label>
                                    <input type="text" name="sub_kegiatan" class="form-control"
                                        value="{{ old('sub_kegiatan', $rencana->sub_kegiatan) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Kegiatan</label>
                                    <input type="text" name="kegiatan" class="form-control"
                                        value="{{ old('kegiatan', $rencana->kegiatan) }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Program</label>
                                    <input type="text" name="nama_program" class="form-control"
                                        value="{{ old('nama_program', $rencana->nama_program) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control"
                                        value="{{ old('lokasi', $rencana->lokasi) }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Volume Target</label>
                                    <input type="text" name="volume" class="form-control"
                                        value="{{ old('volume', $rencana->volume) }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Satuan</label>
                                    <input type="text" name="satuan" class="form-control"
                                        value="{{ old('satuan', $rencana->satuan) }}" required>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <label class="form-label">Tahun</label>
                                    <input type="text" name="tahun" class="form-control"
                                        value="{{ old('tahun', $rencana->tahun) }}" required min="2000"
                                        max="2100">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Perangkat Daerah</label>
                                    @php $user = Auth::guard('pengguna')->user(); @endphp
                                    @if ($user && $user->level == 'Admin')
                                        <input type="hidden" name="id_opd" value="{{ $user->id_opd }}">
                                        <input type="text" class="form-control bg-light"
                                            value="{{ $user->opd->nama ?? '-' }}" readonly>
                                    @else
                                        <select name="id_opd" class="form-select" required>
                                            <option value="">-- Pilih OPD --</option>
                                            @foreach ($opd as $data)
                                                {{-- Asumsi variabel data yang diedit adalah $rencanaKerja --}}
                                                <option value="{{ $data->id }}" @selected(old('id_opd', $rencana->id_opd) == $data->id)>
                                                    {{ $data->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                            </div>

                            {{-- Fieldset untuk Detail Pendanaan --}}
                            <fieldset class="border p-3 rounded-3 mb-3">
                                <legend class="float-none w-auto px-2 h6">Detail Pendanaan</legend>

                                <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal"
                                    data-bs-target="#anggaranModal">
                                    <i class="bi bi-plus-circle"></i> Tambah Anggaran & Sumber Dana
                                </button>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">Anggaran</th>
                                                <th class="text-center" scope="col">Sumber Dana</th>
                                                <th class="text-center" scope="col" style="width: 10%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="anggaran-table-body">
                                            {{-- MEMUAT DATA LAMA DARI DATABASE --}}
                                            @if (is_array($rencana->anggaran) && is_array($rencana->sumberdana))
                                                @foreach ($rencana->anggaran as $index => $anggaranValue)
                                                    @php
                                                        $uniqueId = 'row-initial-' . $index;
                                                        $sumberDanaValue = $rencana->sumberdana[$index] ?? '';
                                                    @endphp
                                                    <tr id="{{ $uniqueId }}">
                                                        <td class="text-center">{{ $anggaranValue }}</td>
                                                        <td class="text-center">{{ $sumberDanaValue }}</td>
                                                        <td class="text-center">
                                                            <button type="button"
                                                                class="btn btn-danger hapus-anggaran-row"
                                                                data-target="{{ $uniqueId }}">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                                <div id="hidden-inputs-container" style="display: none;">
                                    {{-- MEMUAT DATA LAMA SEBAGAI HIDDEN INPUT --}}
                                    @if (is_array($rencana->anggaran) && is_array($rencana->sumberdana))
                                        @foreach ($rencana->anggaran as $index => $anggaranValue)
                                            @php
                                                $uniqueId = 'row-initial-' . $index;
                                                $sumberDanaValue = $rencana->sumberdana[$index] ?? '';
                                            @endphp
                                            <div id="hidden-{{ $uniqueId }}">
                                                <input type="hidden" name="anggaran[]" value="{{ $anggaranValue }}">
                                                <input type="hidden" name="sumberdana[]"
                                                    value="{{ $sumberDanaValue }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="mt-2">
                                    <label class="form-label">Keterangan ( Opsional )</label>
                                    <textarea name="keterangan" class="form-control" rows="3">{{ old('keterangan', $rencana->keterangan) }}</textarea>
                                </div>
                            </fieldset>

                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <a href="{{ route('rencanakerja') }}" class="btn btn-warning">Batal</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal untuk Input Anggaran (Sama seperti di halaman create) --}}
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
@endsection
@push('scripts')
    {{-- Memanggil file JavaScript eksternal --}}
    <script src="{{ asset('js/anggaranDansumberDana.js') }}"></script>
@endpush
