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
                     <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                     <input type="text" class="form-control" placeholder="Type here...">
                 </div>
             </div>
            
         </div>
     </div>
 </nav>

 <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <span class="mask bg-primary opacity-10 border-radius-lg"></span>
                            <div class="card-body p-3 position-relative">
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <div class="icon icon-shape bg-gradient-icon shadow-primary text-center rounded-circle">
                                            <i class="fa-solid fa-list-check text-lg opacity-10"aria-hidden="true"></i>
                                        </div>
                                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                            1600
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
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                                </li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                        <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+55%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
                        <div class="card">
                            <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                            <div class="card-body p-3 position-relative">
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <div class="icon icon-shape  shadow text-center border-radius-2xl">
                                            <i class="fa-solid fa-briefcase text-lg opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                            357
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
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                                </li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                        <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+124%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                            <div class="card-body p-3 position-relative">
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <div class="icon icon-shape  shadow text-center border-radius-2xl">
                                            <i class="fa-solid fa-magnifying-glass-chart opacity-10"
                                                aria-hidden="true"></i>
                                                
                                        </div>
                                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                            2300
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
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                                </li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                        <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+15%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
                        <div class="card">
                            <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                            <div class="card-body p-3 position-relative">
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <div class="icon icon-shape  shadow text-center border-radius-2xl">
                                            <i class="fa-solid fa-bars-progress opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                            940
                                        </h5>
                                        <span class="text-white text-sm">Progres Kerja</span>
                                    </div>
                                    <div class="col-4">
                                        <div class="dropstart text-end mb-6">
                                            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h text-white"></i>
                                            </a>
                                            <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers4">
                                                <li><a class="dropdown-item border-radius-md"
                                                        href="javascript:;">Action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                        action</a></li>
                                                <li><a class="dropdown-item border-radius-md"
                                                        href="javascript:;">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+90%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                <div class="card shadow h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Reviews</h6>
                    </div>
                    <div class="card-body pb-0 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                                <div class="w-100">
                                    <div class="d-flex mb-2">
                                        <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                                        <span class="ms-auto text-sm font-weight-bold">80%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-primary w-80" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex mb-2">
                                        <span class="me-2 text-sm font-weight-bold text-dark">Neutral Reviews</span>
                                        <span class="ms-auto text-sm font-weight-bold">17%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-primary w-10" role="progressbar"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                <div class="w-100">
                                    <div class="d-flex mb-2">
                                        <span class="me-2 text-sm font-weight-bold text-dark">Negative Reviews</span>
                                        <span class="ms-auto text-sm font-weight-bold">3%</span>
                                    </div>
                                    <div>
                                        <div class="progress progress-md">
                                            <div class="progress-bar bg-primary w-5" role="progressbar" aria-valuenow="5"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer pt-0 p-3 d-flex align-items-center">
                        <div class="w-60">
                            <p class="text-sm">
                                More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b>
                                projects were created.
                            </p>
                        </div>
                        <div class="w-40 text-end">
                            <a class="btn btn-dark mb-0 text-end" href="javascript:;">View all reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
