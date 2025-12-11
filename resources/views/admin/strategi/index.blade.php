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

                     <input    id="liveSearchInput"  type="text" class="form-control" placeholder="Type here...">
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
                        <h6>Tabel Strategi</h6>
                        <button type="button" class="btn btn-primary btn-sm mb-0" data-bs-toggle="modal"
                            data-bs-target="#addDataModal">
                            <i class="fa fa-plus me-1"></i> Tambah Data
                        </button>
                    </div>
                    {{-- Akhir Modifikasi Tombol --}}

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table  id="dataTable" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Program</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Strategi</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
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
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-toggle="modal"
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

            <form method="POST" action="{{ route('subprogram.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label for="program">Program</label>
                        <select class="form-control" name="e_program" required>
                            <option value="">Pilih Program</option>
                            <option value="program 1" {{ $data->program == 'program 1' ? 'selected' : '' }}>Program I</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="subprogram">Strategi</label>
                        <input type="text" class="form-control" name="e_subprogram"
                            value="{{ $data->subprogram }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="uraian">Keterangan (opsional)</label>
                        <textarea class="form-control" name="e_uraian" rows="4"
                            placeholder="Masukkan Keterangan">{{ $data->uraian }}</textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
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

