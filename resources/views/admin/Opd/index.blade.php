@extends('component.layout')

@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Opd</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Opd</h6>
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
                        <h6>Tabel Opd</h6>
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
                      <!-- Tombol Trigger Modal -->
                                <button type="button" class="btn btn-primary btn-sm mb-0" data-bs-toggle="modal"
                                    data-bs-target="#modalOpd">
                                    <i class="fa-solid fa-plus me-1"></i>
                            Tambah Data
                                </button>
                                <!-- modal -->
                                <div class="modal fade" id="modalOpd" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Opd</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('opd.store') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label>Nama Opd</label>
                                                        <input type="text" class="form-control" name="nama" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Jenis</label>
                                                        <select name="status" class="form-select" required>
                                                            <option value="">Pilih</option>
                                                            <option value="Internal">Internal</option>
                                                            <option value="Eksternal">Eksternal</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            Nama</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>

                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                            Aksi</th>
                                    </tr>
                                </thead>

                                 <tbody id="dataTabelBody">
                                        @foreach ($opd as $data)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->nama }}</td>
                                                <td class="text-sm font-weight-bold mb-0"> {{ $data->status }}</td>
                                                <td class="text-center text-sm font-weight-bold mb-0">
                                                    <div>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#Modalupdateopd{{ $data->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                        </form>
                                                        <form id="formDelete-{{ $data->id }}"
                                                            action="{{ route('opd.destroy', $data->id) }}" method="POST"
                                                            style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="confirmDelete('{{ $data->id }}')">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </td>
                                                <!-- Modal Update -->
                                                <div class="modal fade" id="Modalupdateopd{{ $data->id }}"
                                                    tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Update Gambaran Umum</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('opd.update', $data->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="mb-3">
                                                                        <label>Nama</label>
                                                                        <input type="text" class="form-control"
                                                                            name="e_nama" value="{{ $data->nama }}"
                                                                            required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Status</label>
                                                                        <select name="e_status" class="form-select"
                                                                            required>
                                                                            <option value="Internal"
                                                                                {{ $data->status == 'Internal' ? 'selected' : '' }}>
                                                                                Internal</option>
                                                                            <option value="Eksternal"
                                                                                {{ $data->status == 'Eksternal' ? 'selected' : '' }}>
                                                                                Eksternal</option>
                                                                        </select>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
@push('scripts')
    <script>
        // 1. Menampilkan alert untuk pesan SUKSES (dari store, update, & destroy)
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        @endif

        // 2. Menampilkan alert untuk SEMUA jenis pesan GAGAL VALIDASI
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                // Mengambil pesan error pertama yang ada, tidak peduli dari field 'nama' atau 'e_nama'
                text: "{{ $errors->first() }}",
            });

            // Logika untuk membuka kembali modal 'Tambah Data' jika error terjadi di sana
            @if ($errors->has('nama'))
                var myModal = new bootstrap.Modal(document.getElementById('modalOpd'));
                myModal.show();
            @endif
        @endif

        // 3. Fungsi konfirmasi hapus data (tidak berubah)
        function confirmDelete(id) {
            Swal.fire({
                title: 'Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('formDelete-' + id).submit();
                }
            });
        }
    </script>
@endpush

