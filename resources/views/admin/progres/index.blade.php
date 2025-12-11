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
                    {{-- Modifikasi: Tombol Tambah Data sekarang memicu modal --}}
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6>Tabel Progres Kerja</h6>
                        <button type="button" class="btn btn-primary btn-sm mb-0" data-bs-toggle="modal"
                            data-bs-target="#addDataModal">
                            <i class="fa fa-plus me-1"></i> Tambah Data
                        </button>
                    </div>
                    {{-- Akhir Modifikasi Tombol --}}

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No
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
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->monev->rencanakerja->tahun ?? '-' }}</td>
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
                                                        <button type="button" class="btn btn-tambah-utama "
                                                            title="Lihat" data-bs-toggle="modal"
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
                                                                            <th class="bg-light text-hijau-kustom th-detail-lebar"><i
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
                                                                            <td class="text-hijau-kustom">{{ $data->monev->tahun ?? '-' }}</td>
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
                                                                                <div class="keterangan-panjang text-hijau-kustom">
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
                                                                    <div class="alert alert-light placeholder-container text-hijau-kustom">
                                                                        <i class="bi bi-map  text-hijau-kustom placeholder-icon"></i>
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
                                                                        <i class="bi bi-image text-hijau-kustom placeholder-icon"></i>
                                                                        <p class="mb-0 mt-2 ">Belum ada foto</p>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer bg-light">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
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

