@extends('component.layout')

@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Regulasi</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Regulasi</h6>
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

    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    {{-- Modifikasi: Tombol Tambah Data sekarang memicu modal --}}
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6>Tabel Regulasi</h6>
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
                        <a href="{{ route('regulasi.create') }}" class="btn btn-primary btn-sm mb-0">
                            <i class="fa-solid fa-plus me-1"></i>
                            Tambah Data
                        </a>
                    </div>
                    {{-- Akhir Modifikasi Tombol --}}

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="dataTable" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                            No
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Judul</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tanggal dibuat</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            file</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="dataTabelBody">
                                    @foreach ($regulasi as $data)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->judul }}</td>
                                            <td class="text-sm font-weight-bold mb-0">{{ $data->tanggal }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                @if ($data->status === 'Aktif')
                                                    <span class="badge bg-success">{{ $data->status }}</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ $data->status }}</span>
                                                @endif
                                            </td>

                                            <td class="text-sm font-weight-bold mb-0">
                                                <button type="button" class="btn btn-sm tambah-utama"
                                                    data-bs-toggle="modal" data-bs-target="#fileModal{{ $data->id }}">
                                                    Lihat
                                                </button>


                                                <!-- Modal -->
                                                <div class="modal fade" id="fileModal{{ $data->id }}" tabindex="-1"
                                                    aria-labelledby="fileModalLabel{{ $data->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="fileModalLabel{{ $data->id }}">Lihat File
                                                                    Regulasi</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <iframe
                                                                    src="{{ asset('storage/regulasi/' . $data->file) }}"
                                                                    width="100%" height="600px"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="text-center align-middle">
                                                <div class="d-flex justify-content-center gap-1">
                                                    <form action="{{ route('regulasi.edit', $data->id) }}"
                                                        method="GET">
                                                        <button class="btn btn-primary">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                    </form>
                                                    <form id="formDelete-{{ $data->id }}"
                                                        action="{{ route('regulasi.delete', $data->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger "
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
