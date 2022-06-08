<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <link type="image/png" sizes="16x16" rel="icon" href="/img/logo.png">
    <link href="/img/logo.png" rel="apple-touch-icon">

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

    <!-- CSS DataTables -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css"> --}}

    {{--
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" /> --}}

    <!-- JS DataTables -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap.min.js"></script> --}}

    {{-- CKEditor CDN --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('dashboard.partials.sidebar')

    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">

        @include('dashboard.partials.navbar')

        @yield('content')
    </div>

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