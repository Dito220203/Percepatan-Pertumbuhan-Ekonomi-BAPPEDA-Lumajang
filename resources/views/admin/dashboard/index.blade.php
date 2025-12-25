@extends('component.layout')
@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <!-- Card Stats Row -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <span class="mask bg-gradient-custom bg-gradient-orange-1 border-radius-lg"></span>
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-8 text-start">
                                <div class="icon icon-shape bg-gradient-icon shadow-primary text-center rounded-circle">
                                    <i class="fa-solid fa-list-check text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                    {{ $totalRencanaAksi }}
                                </h5>
                                <span class="text-white text-sm">Rencana Aksi</span>
                            </div>
                            <div class="col-4">
                                <div class="dropdown text-end mb-6">
                                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h text-white"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                                <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0"
                                    style="visibility: hidden;">
                                    0
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <span class="mask bg-gradient-custom bg-gradient-orange-2 border-radius-lg"></span>
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-8 text-start">
                                <div class="icon icon-shape shadow text-center border-radius-2xl">
                                    <i class="fa-solid fa-briefcase text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                    {{ $totalrenja }}
                                </h5>
                                <span class="text-white text-sm">Rencana Kerja</span>
                            </div>
                            <div class="col-4">
                                <div class="dropstart text-end mb-6">
                                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h text-white"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                                <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">valid :
                                    {{ $renjaaktiv }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <span class="mask bg-gradient-custom bg-gradient-orange-3 border-radius-lg"></span>
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-8 text-start">
                                <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                    <i class="fa-solid fa-chart-line text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                    {{ $totalmonev }}
                                </h5>
                                <span class="text-white text-sm">Monitoring Evaluasi</span>
                            </div>
                            <div class="col-4">
                                <div class="dropdown text-end mb-6">
                                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h text-white"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                                <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">valid :
                                    {{ $monevaktiv }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card">
                    <span class="mask bg-gradient-custom bg-gradient-orange-4 border-radius-lg"></span>
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-8 text-start">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="fa-solid fa-bars-progress text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                    {{ $totalprogres }}
                                </h5>
                                <span class="text-white text-sm">Progres Kerja</span>
                            </div>
                            <div class="col-4">
                                <div class="dropdown text-end mb-6">
                                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h text-white"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers4">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                                <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">valid :
                                    {{ $progresaktiv }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h6>Progres Kerja</h6>

                            <form method="GET">
                                <select name="tahun" class="form-select form-select-sm" style=" width: 90px"
                                    onchange="this.form.submit()">
                                    @foreach ($listTahun as $tahun)
                                        <option value="{{ $tahun }}" {{ $tahun == $tahunAktif ? 'selected' : '' }}>
                                            {{ $tahun }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>

                        </div>

                    </div>
                    <div class="card-body p-3">
                        <canvas id="performanceChart" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('performanceChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Progres Kerja Tahun {{ $tahunAktif }}',
                    data: @json(array_values($dataChart)),
                    borderColor: '#D66700',
                    backgroundColor: 'rgba(255,160,49,0.3)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
