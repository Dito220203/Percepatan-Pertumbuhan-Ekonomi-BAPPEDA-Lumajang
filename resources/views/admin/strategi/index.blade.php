@extends('component.layout')

@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Strategi</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Strategi</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <input id="liveSearchInput" type="text" class="form-control" placeholder="Type here...">
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
                        <h6>Tabel Strategi</h6>
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
                        <button type="button" class="btn btn-primary btn-sm mb-0" data-bs-toggle="modal"
                            data-bs-target="#addDataModal">
                            <i class="fa fa-plus me-1"></i> Tambah Data
                        </button>
                    </div>
                    {{-- Akhir Modifikasi Tombol --}}

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-container">
                            <div class="top-scrollbar-container">
                                <div class="top-scrollbar-content"></div>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTable" class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                No
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Program</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Strategi</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataTabelBody">
                                        @foreach ($subprogram as $data)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->program }}</td>
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->subprogram }}</td>
                                                <td class="text-center text-sm font-weight-bold mb-0">

                                                    <!-- Detail -->
                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#ModalDetailSub{{ $data->id }}">
                                                        <i class="fa-solid fa-circle-info"></i>
                                                    </button>
                                                    <!-- Edit -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#Modalupdate{{ $data->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <!-- Hapus -->
                                                    <form id="formDelete-{{ $data->id }}"
                                                        action="{{ route('subprogram.delete', $data->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="confirmDelete('{{ $data->id }}')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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


    {{-- Modal Tambah Data --}}
    <div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Tambah Data Strategi</h5>
                    {{-- Tombol close modal --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('subrogram.store') }}" enctype="multipart/form-data">
                    @csrf {{-- Penting: Pastikan ada CSRF token --}}

                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="program">Program</label>
                            <select class="form-control" id="statusSelect" name="program" required>
                                <option value="">Pilih Program</option>
                                <option value="program 1">Program I</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="subprogram">Strategi</label>
                            <input type="text" class="form-control" id="subprogram" name="subprogram"
                                placeholder="Masukkan Strategi" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="uraian">keterangan (opsional)</label>
                            <textarea class="form-control" id="uraian" name="uraian" rows="4" placeholder="Masukkan Keterangan"></textarea>
                        </div>

                        {{-- Tambahkan field lain sesuai kebutuhan Anda (misal: Tanggal Mulai) --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn bg-gradient-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Akhir Modal Tambah Data --}}

    {{-- Modal Update Data --}}
    @foreach ($subprogram as $data)
        <div class="modal fade" id="Modalupdate{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalupdateLabel{{ $data->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalupdateLabel{{ $data->id }}">Update Data Strategi</h5>

                        {{-- Tombol Close --}}
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form method="POST" action="{{ route('subprogram.update', $data->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div class="form-group mb-3">
                                <label for="program">Program</label>
                                <select class="form-control" name="e_program" required>
                                    <option value="">Pilih Program</option>
                                    <option value="program 1" {{ $data->program == 'program 1' ? 'selected' : '' }}>
                                        Program I</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="subprogram">Strategi</label>
                                <input type="text" class="form-control" name="e_subprogram"
                                    value="{{ $data->subprogram }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="uraian">Keterangan (opsional)</label>
                                <textarea class="form-control" name="e_uraian" rows="4" placeholder="Masukkan Keterangan">{{ $data->uraian }}</textarea>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary"
                                data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn bg-gradient-primary">Update Data</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    @endforeach
    {{-- Akhir Modal Update --}}


    {{-- Modal Detail --}}
    @foreach ($subprogram as $data)
        <div class="modal fade" id="ModalDetailSub{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalDetailSubLabel{{ $data->id }}" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalDetailSubLabel{{ $data->id }}">Detail Strategi</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="fw-bold">Program:</label>
                            <p class="mb-0">{{ $data->program }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Strategi:</label>
                            <p class="mb-0">{{ $data->subprogram }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Keterangan:</label>
                            <p class="mb-0">
                                {{ $data->uraian ? $data->uraian : 'Tidak ada keterangan.' }}
                            </p>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    {{-- Akhir Modal Detail --}}
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- Pastikan path asset-nya benar sesuai lokasi file kamu --}}
@endpush
