<nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
    <div class="container-fluid py-1 mt-4">
        <nav aria-label="breadcrumb">
            <h6 class="text-white font-weight-bolder ms-2" style="font-size: 20px">{{ $navbar }}</h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    @if($navbar == 'Profile' || $navbar == 'Edit Profile')
    <div class="page-header min-height-200 border-radius-xl mt-4"
        style="background-image: url('/dasbor/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        @else
        <div class="page-header min-height-100 border-radius-xl mt-4"
            style="background-image: url('/dasbor/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            @endif
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
    </div>