@extends('component.layout')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark" aria-current="page">Rencana Aksi</li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah Data</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Tambah Rencana Aksi</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

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
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
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
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Form Tambah Rencana Aksi</h6>
                        <a href="{{route('rencana6tahun')}}" class="btn btn-secondary btn-sm mb-0">
                            <i class="fa-solid fa-arrow-left me-1"></i>
                            Kembali ke Tabel
                        </a>
                    </div>
                    <div class="card-body px-4 pt-0 pb-2">
                        <form action="{{ route('rencanaAksi.store') }}" method="POST">
                                @csrf

                                {{-- Bagian Atas Form (Data Utama) --}}
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Strategi</label>
                                        {{-- NAME: sub_program --}}
                                        <select name="sub_program" class="form-select" required>
                                            <option value="">-- Pilih Strategi --</option>
                                            @foreach ($subprogram as $data)
                                                <option value="{{ $data->id }}" {{ old('sub_program') == $data->id ? 'selected' : '' }}>{{ $data->subprogram }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Rencana Aksi / Aktivitas</label>
                                        {{-- NAME: rencanaAksi --}}
                                        <input type="text" name="rencanaAksi" class="form-control" value="{{ old('rencanaAksi') }}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Sub Kegiatan</label>
                                        {{-- NAME: sub_kegiatan --}}
                                        <input type="text" name="sub_kegiatan" class="form-control" value="{{ old('sub_kegiatan') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Kegiatan</label>
                                        {{-- NAME: kegiatan --}}
                                        <input type="text" name="kegiatan" class="form-control" value="{{ old('kegiatan') }}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Program</label>
                                        {{-- NAME: nama_program --}}
                                        <input type="text" name="nama_program" class="form-control" value="{{ old('nama_program') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Lokasi</label>
                                        {{-- NAME: lokasi --}}
                                        <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi') }}" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Volume Target</label>
                                        {{-- NAME: volume --}}
                                        <input type="text" name="volume" class="form-control" value="{{ old('volume') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Satuan</label>
                                        {{-- NAME: satuan --}}
                                        <input type="text" name="satuan" class="form-control" value="{{ old('satuan') }}" required>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <label class="form-label">Tahun</label>
                                        {{-- NAME: tahun --}}
                                        <input type="number" name="tahun" class="form-control" placeholder="YYYY" value="{{ old('tahun') }}" required min="2000" max="2100">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Perangkat Daerah</label>
                                        {{-- NAME: id_opd --}}
                                        <select name="id_opd" class="form-select" required>
                                            <option value="">-- Pilih OPD --</option>
                                            @foreach ($opds as $item)
                                                <option value="{{ $item->id }}" {{ old('id_opd') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- Bagian Anggaran dan Sumber Dana --}}
                                <fieldset class="border p-3 rounded-3 mb-3">
                                    <legend class="float-none w-auto px-2 h6">Detail Pendanaan</legend>

                                    {{-- Tombol untuk memicu Modal --}}
                                    <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#anggaranModal">
                                        <i class="bi bi-plus-circle"></i> Tambah Anggaran & Sumber Dana
                                    </button>

                                    {{-- Tabel untuk menampilkan data anggaran --}}
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
                                                {{-- Data anggaran akan muncul di sini via JavaScript --}}
                                            </tbody>
                                        </table>
                                    </div>

                                    {{-- Container untuk menyimpan hidden input yang akan dikirim ke server (diolah oleh JS) --}}
                                    <div id="hidden-inputs-container"></div>

                                    <div class="mt-2">
                                        <label class="form-label">Keterangan ( Opsional )</label>
                                        <textarea name="keterangan" class="form-control" rows="3" >{{ old('keterangan') }}</textarea>
                                    </div>

                                </fieldset>

                                <div class="d-flex justify-content-end gap-2 mt-4">
                                    <a href="{{ route('rencana6tahun') }}" class="btn btn-warning">Batal</a>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- =============================================================================== --}}
    {{-- MODAL UNTUK INPUT ANGGARAN --}}
    {{-- =============================================================================== --}}
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
                            {{-- ID: modal-anggaran --}}
                            <input type="text" id="modal-anggaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="modal-sumberdana" class="form-label">Sumber Dana</label>
                            {{-- ID: modal-sumberdana --}}
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
                            {{-- ID: modal-sumberdana-lainnya --}}
                            <input type="text" id="modal-sumberdana-lainnya" class="form-control" placeholder="Masukkan sumber dana lainnya">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    {{-- ID: tambah-ke-tabel --}}
                    <button type="button" class="btn btn-success" id="tambah-ke-tabel">Tambah ke Tabel</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{-- Memanggil file JavaScript eksternal --}}
    <script src="{{ asset('js/anggaranDansumberDana.js') }}"></script>
@endpush
