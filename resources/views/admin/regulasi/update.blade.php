@extends('component.layout')

@section('content')
    {{-- BAR NAVIGASI ATAS --}}
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark" aria-current="page">Rencana Aksi</li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ubah Data</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Ubah Regulasi</h6>
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
                        <a href="{{ route('regulasi') }}" class="btn btn-secondary btn-sm mb-0">
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

                        <form action="{{ route('regulasi.update', $regulasi->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- Judul Regulasi --}}
                            <div class="mt-2">
                                <label class="form-label">Judul Regulasi</label>
                               <textarea name="e_judul" class="form-control" rows="2" required>{{ old('judul', $regulasi->judul) }}</textarea>

                            </div>

                            {{-- Status --}}
                            <div class="row mb-3">
                                 {{-- File Upload --}}
                            <div class="col-md-4">
                                <label class="form-label">Upload File</label>
                                <div class="col-sm-12">
                                    <input type="file" name="e_file" id="e-file-input" class="form-control"
                                        accept=".pdf">
                                    <small class="text-muted">* Hanya file PDF, Maksimal 2 MB</small>

                                    @if ($regulasi->file)
                                        <div class="mt-2">
                                            <a href="{{ asset('storage/regulasi/' . $regulasi->file) }}" target="_blank"
                                                class="btn btn-info btn-sm">
                                                Lihat File Lama
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                                {{-- Tanggal --}}
                                <div class="col-md-4">
                                    <label class="form-label">Tanggal</label>
                                    <div class="col-sm-12">
                                        <input type="date" name="e_tanggal" class="form-control"
                                            value="{{ old('tanggal', $regulasi->tanggal) }}" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <div class="col-sm-12">
                                        <select name="e_status" class="form-select" required>
                                            <option value="Aktif"
                                                {{ old('status', $regulasi->status) == 'Aktif' ? 'selected' : '' }}>
                                                Aktif</option>
                                            <option value="Non Aktif"
                                                {{ old('status', $regulasi->status) == 'Non Aktif' ? 'selected' : '' }}>
                                                Non Aktif</option>
                                        </select>
                                    </div>
                                </div>
                             </div>

                            <script>
                                document.getElementById("e-file-input").addEventListener("change", function(e) {
                                    const file = e.target.files[0];
                                    if (file && file.size > 2 * 1024 * 1024) {
                                        alert("Ukuran file maksimal 2 MB!");
                                        e.target.value = "";
                                    }
                                });
                            </script>


                            {{-- Tombol --}}
                            <div class="row mb-3">
                                 <div class="d-flex justify-content-end gap-2 mt-4">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('regulasi') }}" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
