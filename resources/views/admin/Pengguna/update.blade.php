@extends('component.layout')

@section('content')
    {{-- BAR NAVIGASI ATAS --}}
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark" aria-current="page">Pengguna</li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ubah Data</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Ubah Pengguna</h6>
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
                        <h6 class="text-uppercase">Form Ubah Regulasi</h6>
                        <a href="{{ route('pengguna') }}" class="btn btn-secondary btn-sm mb-0">
                            <i class="fa-solid fa-arrow-left me-1"></i>
                            Kembali ke Tabel
                        </a>
                    </div>
                    <div class="card-body px-4 pt-0 pb-2">

                          <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    {{-- Username --}}
                                     <div class="row mb-3">
                                <div class="col-md-6">
                                        <label class="form-label">Username</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="e_username" class="form-control @error('e_username') is-invalid @enderror"
                                                value="{{ old('e_username', $pengguna->username) }}" required>
                                            @error('e_username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Nama --}}
                                   <div class="col-md-6">
                                        <label class="form-label">Nama</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="e_nama" class="form-control"
                                                value="{{ old('e_nama', $pengguna->nama) }}" required>
                                        </div>
                                    </div>
                                    </div>


                                    {{-- Perangkat Daerah --}}
                                  <div class="row mb-3">
                                <div class="col-md-4">
                                        <label class="form-label">Perangkat Daerah</label>
                                        <div class="col-sm-12">
                                            <select name="e_id_opd" class="form-select @error('e_id_opd') is-invalid @enderror" required>
                                                <option value="">Pilih</option>
                                                @foreach ($opd as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ old('e_id_opd', $pengguna->id_opd) == $data->id ? 'selected' : '' }}
                                                        {{-- Nonaktifkan jika ID ada di array dan itu bukan OPD milik pengguna saat ini --}}
                                                        @if(in_array($data->id, $assigned_opd_ids)) disabled @endif>
                                                        {{ $data->nama }}
                                                        @if(in_array($data->id, $assigned_opd_ids)) (Sudah Dipilih) @endif
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('e_id_opd')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Level --}}
                                   <div class="col-md-4">
                                        <label class="form-label">Level</label>
                                        <div class="col-sm-12">
                                            <select name="e_level" class="form-select" required>
                                                <option value="">Pilih</option>
                                                <option value="Super Admin"
                                                    {{ old('e_level', $pengguna->level) == 'Super Admin' ? 'selected' : '' }}>
                                                    Super Admin</option>
                                                <option value="Admin"
                                                    {{ old('e_level', $pengguna->level) == 'Admin' ? 'selected' : '' }}>Admin
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                     {{-- Password --}}
                                   <div class="col-md-4">
                                        <label class="form-label">Password Baru</label>
                                        <div class="col-sm-12">
                                            <input type="password" name="e_password" class="form-control">
                                            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                                        </div>
                                    </div>
                                    </div>


                                    {{-- Tombol --}}
                                    <div class="row mb-3">
                                        <div class="d-flex justify-content-end gap-2 mt-4">
                                            <button type="submit" class="btn btn-success">Update</button>
                                            <a href="{{ route('pengguna') }}" class="btn btn-warning">Kembali</a>
                                        </div>
                                    </div>
                                </form>



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
