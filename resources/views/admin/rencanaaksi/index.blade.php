@extends('component.layout')

@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Rencana Aksi</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Rencana Aksi</h6>
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
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6>Tabel Rencana Aksi</h6>
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
                        @if (Auth::guard('pengguna')->user()->level === 'Super Admin')
                            <div class="d-flex gap-2">
                                <a href="{{ route('rencanaAksi.export.excel', request()->query()) }}"
                                    class="btn btn-success btn-sm mb-0">
                                    <i class="fa-solid fa-file-excel me-1"></i>
                                    Export Excel
                                </a>
                                <a href="{{ route('rencanaAksi.create') }}" class="btn btn-primary btn-sm mb-0">
                                    <i class="fa-solid fa-plus me-1"></i>
                                    Tambah Data
                                </a>
                            </div>
                        @endif
                    </div>

                    {{-- Akhir Modifikasi Tombol --}}

                    <div class="card-body ">
                        <div class="table-container">
                            <div class="top-scrollbar-container">
                                <div class="top-scrollbar-content"></div>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTable" class="table  ">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center text-uppercase font-weight-bolder">
                                                No</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Strategi</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Rencana Aksi/Aktivitas</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5 col-medium">
                                                Sub Kegiatan</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5 col-long">
                                                Kegiatan</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Program</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Lokasi</th>
                                            <th class="text-uppercase font-weight-bolder ps-5">
                                                Volume Target</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Satuan</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Tahun</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Perangkat Daerah</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5 col-long">
                                                Anggaran</th>
                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Sumber Dana</th>

                                            <th
                                                class="text-uppercase font-weight-bolder ps-5">
                                                Keterangan</th>
                                            @if (Auth::guard('pengguna')->user()->level === 'Super Admin')
                                                <th
                                                    class="text-center text-uppercase font-weight-bolder  ps-5">
                                                    Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>

                                    <tbody id="dataTabelBody">
                                        @foreach ($rencanaAksi as $data)
                                            <tr>
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
                                                <td class="text-sm font-weight-bold mb-0">{{ $data->opd->nama ?? '-' }}
                                                </td>

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
                                                    <td class="text-sm font-weight-bold mb-0">
                                                        {{ $data->sumberdana ?: '-' }}
                                                    </td>
                                                @endif


                                                <td class="text-sm font-weight-bold mb-0">{{ $data->keterangan ?? '-' }}
                                                </td>
                                                @if (Auth::guard('pengguna')->user()->level === 'Super Admin')
                                                    <td class="text-center text-sm font-weight-bold mb-0">
                                                        <div class="d-flex justify-content-center gap-1">
                                                            <a href="{{ route('rencanaAksi.edit', $data->id) }}"
                                                                class="btn btn-primary" title="Edit">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <form id="formDelete-{{ $data->id }}"
                                                                action="{{ route('rencanaAksi.destroy', $data->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="confirmDelete('{{ $data->id }}')">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                @endif
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
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- Pastikan path asset-nya benar sesuai lokasi file kamu --}}
@endpush

