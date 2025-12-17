@extends('component.layout')

@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Proges Kerja</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Progres Kerja</h6>
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
                        <h6>Tabel Progres Kerja</h6>
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
                                            Rencana Aksi / Aktivitas</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tahun</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="dataTabelBody">
                                    @foreach ($progres as $data)
                                        <tr id="row-{{ $data->id }}">
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{-- Panggil relasi 'rencanakerja', lalu kolom 'rencana_aksi' dari tabel RencanaKerja --}}
                                                {{ $data->monev?->rencanakerja?->rencana_aksi ?? '-' }}
                                            </td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                {{ $data->monev->rencanakerja->tahun ?? '-' }}</td>
                                            <td class="text-sm font-weight-bold mb-0">
                                                @if ($data->status === 'Valid')
                                                    <span class="badge bg-success">{{ $data->status }}</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ $data->status }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center align-middle">
                                                <div class="d-flex justify-content-center gap-1">
                                                    <!-- Tombol Detail -->
                                                    <button type="button" class="btn btn-tambah-utama " title="Lihat"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailModal{{ $data->id }}">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>

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
                                                            action="{{ route('progres.updateStatus', $data->id) }}"
                                                            method="POST" style="display:none;">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="">
                                                        </form>
                                                    @endif
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
                        @foreach ($progres as $data)
                            <div class="modal fade" id="detailModal{{ $data->id }}" tabindex="-1"
                                aria-labelledby="detailModalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-super-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header card-dashboard text-white">
                                            <h5 class="modal-title" id="detailModalLabel{{ $data->id }}">
                                                <i class="bi bi-info-circle me-2"></i>Detail Progres
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-hijau-kustom">
                                            <div class="row g-4">

                                                <div class="col-md-6">
                                                    <div>
                                                        <h6 class="mb-3  fw-bold"><i
                                                                class="bi bi-list-ul  me-2"></i>Informasi
                                                            Detail</h6>
                                                        <div class="table-wrapper ">
                                                            <table class="table table-hover  mb-0">
                                                                <tr>
                                                                    <th
                                                                        class="bg-light text-hijau-kustom th-detail-lebar">
                                                                        <i
                                                                            class="bi bi-clipboard-check me-2"></i>Rencana
                                                                        Aksi</th>
                                                                    <td class="fw-medium text-hijau-kustom">
                                                                        {{ $data->monev?->rencanakerja?->rencana_aksi ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="bg-light  text-hijau-kustom"><i
                                                                            class="bi bi-calendar me-2"></i>Tahun
                                                                    </th>
                                                                    <td class="text-hijau-kustom">
                                                                        {{ $data->monev->tahun ?? '-' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="bg-light  text-hijau-kustom"><i
                                                                            class="bi bi-flag me-2"></i>Status</th>
                                                                    <td><span
                                                                            class="badge {{ $data->status === 'Valid' ? 'bg-success' : 'bg-secondary' }}">{{ $data->status }}</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th class="bg-light text-hijau-kustom"><i
                                                                            class="bi bi-card-text me-2"></i>Uraian
                                                                    </th>
                                                                    <td>
                                                                        <div
                                                                            class="keterangan-panjang text-hijau-kustom">
                                                                            @if ($data->monev && $data->monev->fotoProgres->isNotEmpty())
                                                                                {{ $data->monev->fotoProgres->first()->deskripsi ?? 'Tidak ada uraian.' }}
                                                                            @else
                                                                                <span
                                                                                    class="text-muted fst- text-hijau-kustom">Tidak
                                                                                    ada uraian</span>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="mt-4">
                                                        <h6 class="mb-3 fw-bold text-hijau-kustom"><i
                                                                class="bi bi-geo-alt-fill  me-2"></i>Lokasi
                                                            Peta</h6>
                                                        @if ($data->monev && $data->monev->map)
                                                            <div id="detailMapProgres{{ $data->id }}"
                                                                class="peta-container rounded shadow-sm text-hijau-kustom"
                                                                data-latitude="{{ $data->monev->map->latitude }}"
                                                                data-longitude="{{ $data->monev->map->longitude }}">
                                                            </div>
                                                        @else
                                                            <div
                                                                class="alert alert-light placeholder-container text-hijau-kustom">
                                                                <i
                                                                    class="bi bi-map  text-hijau-kustom placeholder-icon"></i>
                                                                <p class="mb-0 mt-3 ">Lokasi belum
                                                                    ditandai</p>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h6 class="mb-3 fw- text-hijau-kustom"><i
                                                            class="bi bi-images me-2"></i>Dokumentasi
                                                        Foto</h6>
                                                    <div class="foto-container-scrollable text-hijau-kustom">
                                                        @if ($data->monev && $data->monev->fotoProgres->isNotEmpty())
                                                            <div class="row g-3">
                                                                @foreach ($data->monev->fotoProgres as $foto)
                                                                    <div class="col-12">
                                                                        <a href="{{ asset('storage/' . $foto->foto) }}"
                                                                            target="_blank"
                                                                            class="d-block hover-effect">
                                                                            <img src="{{ asset('storage/' . $foto->foto) }}"
                                                                                alt="Foto Progres"
                                                                                class="galeri-foto-item">
                                                                        </a>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @else
                                                            <div
                                                                class="alert alert-light text-center m-0 placeholder-container text-hijau-kustom">
                                                                <i
                                                                    class="bi bi-image text-hijau-kustom placeholder-icon"></i>
                                                                <p class="mb-0 mt-2 ">Belum ada foto</p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Event listener ini akan berjalan untuk SEMUA modal di halaman
        document.addEventListener('shown.bs.modal', function(event) {
            // Cari kontainer peta di dalam modal yang BARU SAJA DIBUKA
            const modal = event.target;
            const mapContainer = modal.querySelector('.peta-container');

            // Jika tidak ada kontainer peta di modal ini, atau peta sudah dibuat, hentikan
            if (!mapContainer || mapContainer._leaflet_id) {
                return;
            }

            const lat = mapContainer.dataset.latitude;
            const lng = mapContainer.dataset.longitude;
            const mapId = mapContainer.id;

            // Inisialisasi peta dalam mode 'view-only'
            const detailMap = L.map(mapId, {
                center: [lat, lng],
                zoom: 15,
                scrollWheelZoom: false, // Matikan zoom scroll
                dragging: false, // Matikan drag
                zoomControl: true // Tampilkan kontrol zoom +/-
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(detailMap);

            // Tambahkan penanda yang tidak bisa digeser
            L.marker([lat, lng]).addTo(detailMap);

            // Penting: Sesuaikan ukuran peta setelah modal tampil
            setTimeout(function() {
                detailMap.invalidateSize();
            }, 200);
        });
    </script>
@endpush
