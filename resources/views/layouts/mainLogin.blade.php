<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="image/png" sizes="16x16" rel="icon" href="/img/logo.png">
    <link href="/img/logo.png" rel="apple-touch-icon">

    <title>{{$title}}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="dasbor/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="dasbor/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="dasbor/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="dasbor/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">

    @yield('container')

    {{-- Footer --}}
    <footer class="footer py-2">
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
    </footer>
    <!--   Core JS Files   -->
    <script src="js/script.js"></script>
    <script src="dasbor/assets/js/core/popper.min.js"></script>
    <script src="dasbor/assets/js/core/bootstrap.min.js"></script>
    <script src="dasbor/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="dasbor/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
</body>

</html>