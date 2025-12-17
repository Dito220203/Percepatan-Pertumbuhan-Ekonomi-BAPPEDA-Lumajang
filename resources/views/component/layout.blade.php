<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        percepatan pertumbuhan ekonomi
    </title>

    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
    <!-- Nucleo Icons -->
    {{-- <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" /> --}}
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.1.0') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/tambahan.css') }}">
    <!-- PETA -->
    <link href="{{ asset('assets/vendor/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/leaflet/geosearch.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.11.0/dist/geosearch.css" /> --}}

    <link href="{{ asset('assets/vendor/quil1.3.6/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quil1.3.6/quill.snow.css') }}" rel="stylesheet">

    {{-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> --}}
    <script src="{{ asset('assets/vendor/jquery-3.6.0/jquery-3.6.0.min.js') }}"></script>


</head>



<body class="g-sidenav-show bg-gray-100">


    @include('component.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        {{-- @include('component.navbar') --}}

        @yield('content')
        {{-- modal ganti pasword --}}
        @include('admin.GantiPassword.index')
        @include('component.footer')
    </main>


    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </div>
            <hr class="horizontal dark my-1">
        </div>
    </div>
    <script src="{{ asset('assets/vendor/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/sweetalert-custom.js') }}"></script>
    <script src="{{ asset('js/updateStatus.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- js buatan --}}
     <script src="{{ asset('js/entries-pagnation-admin.js') }}"></script>
    <script src="{{ asset('js/preview-image.js') }}"></script>
 <script src="{{ asset('js/live-search.js') }}"></script>
    <script src="{{ asset('js/alerthapus2.js') }}"></script>
    <script src="{{ asset('js/modalApludMonevDokumentasi.js') }}"></script>
    <script src="{{ asset('assets/vendor/leaflet/geosearch.umd.js') }}"></script>
    <script src="{{ asset('js/entries-pagnation-admin.js') }}"></script>

    <!-- SweetAlert Success -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6',
            });
        </script>
        @php
            session()->forget('success');
        @endphp
    @endif

    <script src="{{ asset('js/preview-image.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.1.0') }}"></script>
    @stack('scripts')
</body>

</html>
