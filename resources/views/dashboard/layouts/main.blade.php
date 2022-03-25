<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <link type="image/png" sizes="16x16" rel="icon"
        href="https://img.icons8.com/color-glass/48/000000/graduation-cap.png">
    <link href="https://img.icons8.com/color-glass/48/000000/graduation-cap.png" rel="apple-touch-icon">

    <title>Dashboard Website Alumni</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/dasbor/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/dasbor/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/dasbor/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/dasbor/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    {{-- /* Hide scrollbars */ --}}
    {{-- <style>
        body {
            overflow: hidden;
        }
    </style> --}}
    <!-- CSS DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />

    <!-- JS DataTables -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    {{-- CKEditor CDN --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

    {{-- Script Livewire --}}
    <script src="/vendor/livewire/livewire.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('dashboard.partials.sidebar')

    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">

        @include('dashboard.partials.navbar')

        @yield('content')

        {{-- Footer --}}
        {{-- <footer class="footer py-2">
            <div class="container">
                <div class="row">
                    <div class="col-8 mx-auto text-center">
                        <p class="mb-0 text-secondary">
                            Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> Soft by <a target="_blank" href="https://www.creative-tim.com">Creative Tim.</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>

    {{-- <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
            </div>
        </div>
    </div> --}}

    <!--   Core JS Files   -->
    <script src="/dasbor/assets/js/core/popper.min.js"></script>
    <script src="/dasbor/assets/js/core/bootstrap.min.js"></script>
    <script src="/dasbor/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/dasbor/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/dasbor/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>