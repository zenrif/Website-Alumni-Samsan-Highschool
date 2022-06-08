@extends('dashboard.layouts.main')

@section('content')

<div class="container-fluid py-4 mt-2">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/">
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="mb-0 text-capitalize font-weight-bolder" style="font-size: 20px">Home
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <svg class="text-lg opacity-10" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="40" height="40" viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M170.925,67.725l-83.3125,-61.8125c-0.95115,-0.70597 -2.25235,-0.70597 -3.2035,0l-83.3125,61.8125c-1.18532,0.87848 -1.44083,2.54827 -0.57244,3.741l15.23813,20.93563c0.42223,0.57997 1.05882,0.96705 1.76802,1.07507c0.70921,0.10802 1.43216,-0.07199 2.00792,-0.49995l7.33687,-5.461v76.42175c0,1.48427 1.20323,2.6875 2.6875,2.6875h112.875c1.48427,0 2.6875,-1.20323 2.6875,-2.6875v-76.42175l7.34762,5.45294c0.57575,0.42796 1.29871,0.60797 2.00792,0.49995c0.70921,-0.10802 1.34579,-0.4951 1.76802,-1.07507l15.23812,-20.93563c0.86528,-1.1885 0.61502,-2.85169 -0.56169,-3.73294zM67.1875,161.25v-61.8125h37.625v61.8125zM139.75,83.53556v77.71444h-29.5625v-64.5c0,-1.48427 -1.20323,-2.6875 -2.6875,-2.6875h-43c-1.48427,0 -2.6875,1.20323 -2.6875,2.6875v64.5h-29.5625v-77.71444l53.75,-39.87712zM153.49656,87.02931l-65.88406,-48.86681c-0.95115,-0.70597 -2.25235,-0.70597 -3.2035,0l-65.90556,48.87488l-12.07494,-16.58994l79.5715,-59.039l79.5715,59.039z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/dashboard/member">
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="mb-0 text-capitalize font-weight-bolder" style="font-size: 20px">Members
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <svg class="text-lg opacity-10" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="40" height="40" viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g id="original-icon" fill="#ffffff">
                                                <path
                                                    d="M132.96406,143.05563h39.25094l-0.22844,-3.64156c-1.06156,-17.91219 -15.27844,-23.52906 -26.70031,-28.03063c-6.3425,-2.51281 -12.34906,-4.87781 -14.09594,-8.69406c-0.26875,-3.225 -0.24188,-5.73781 -0.215,-8.62688v-1.16906c2.74125,-2.86219 5.21375,-8.4925 6.19469,-13.20906c2.10969,-1.19594 4.63594,-3.95063 5.40188,-10.29313c0.37625,-3.18469 -0.51063,-5.67062 -1.77375,-7.36375c1.73344,-5.99312 5.0525,-20.78781 -0.91375,-30.38219c-2.53969,-4.085 -6.35594,-6.67844 -11.38156,-7.71313c-2.87563,-3.49375 -8.21031,-5.38844 -15.33219,-5.38844c-8.17,0.16125 -14.68719,2.15 -19.48438,5.84531c-2.16344,-1.38406 -4.6225,-2.39188 -7.44437,-2.94281c-3.25188,-4.11187 -9.47344,-6.3425 -17.83156,-6.3425c-12.67156,0.24188 -21.93,4.11188 -27.54688,11.5025c-6.65156,8.76125 -7.88781,22.05094 -3.68187,39.50625c-1.54531,1.89469 -2.6875,4.81063 -2.23063,8.64031c0.91375,7.59219 3.85656,10.68281 6.3425,11.91906c1.1825,5.95281 4.43438,12.65812 7.59219,15.81594l0.01344,1.6125c0.02687,3.48031 0.05375,6.51719 -0.28219,10.4275c-2.09625,4.8375 -9.11063,7.59219 -17.18656,10.77687c-13.45094,5.28094 -30.18063,11.85188 -31.43031,32.73375l-0.215,3.64156h138.03l-0.215,-3.64156c-0.37625,-6.1275 -2.09625,-10.99187 -4.63594,-14.98281zM7.32344,154.8c2.59344,-13.6525 14.79469,-18.43625 26.61969,-23.09906c9.43312,-3.69531 18.32875,-7.2025 21.29844,-15.1575l0.20156,-0.90031c0.40312,-4.48813 0.37625,-7.94156 0.33594,-11.61l-0.01344,-3.18469l0.06719,-2.0425l-1.84094,-0.9675c-1.505,-1.02125 -5.53625,-7.955 -6.19469,-14.16312l-0.30906,-2.83531l-2.83531,-0.22844c-0.44344,-0.04031 -2.21719,-1.27656 -2.86219,-6.67844c-0.33594,-2.76813 1.02125,-3.74906 1.02125,-3.74906l2.19031,-1.33031l-0.645,-2.4725c-4.17906,-16.07125 -3.48031,-28.38 2.00219,-35.60937c4.27312,-5.64375 11.74437,-8.6 22.11812,-8.78813c6.46344,0 11.23375,1.6125 12.77906,4.31344l0.83312,1.47813l1.67969,0.22844c4.59562,0.645 7.86094,2.59344 9.97062,5.99313c5.28094,8.50594 2.21719,24.21437 -0.41656,32.15594l-0.72562,2.58l2.20375,1.45125c0.01344,0 1.35719,0.98094 1.02125,3.74906c-0.645,5.40187 -2.41875,6.63812 -2.86219,6.67844l-2.83531,0.24187l-0.30906,2.82188c-0.65844,6.235 -4.56875,13.16875 -5.93937,14.13625l-1.84094,0.9675l-0.01344,5.2675c-0.04031,3.66844 -0.06719,7.10844 0.33594,11.59656l0.20156,0.90031c2.95625,7.955 11.825,11.44875 21.21781,15.1575c6.73219,2.66063 13.57187,5.375 18.69156,9.74219c0.34937,0.55094 0.81969,1.00781 1.41094,1.29c3.13094,3.07719 5.44219,6.96062 6.42312,12.06687z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/dashboard/dana-alumni">
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="mb-0 text-capitalize font-weight-bolder" style="font-size: 20px">Dana
                                        Alumni
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <img style="width:40px" src="/img/icons/icons8-fundraising-66.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @can('admin')
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/dashboard/artikel">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="mb-0 text-capitalize font-weight-bolder" style="font-size: 20px">
                                        Artikel</p>

                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                        viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M97.8418,6.61538c-14.00946,8.08856 -41.80207,24.13355 -55.48137,32.03035l13.04988,7.58443l55.48137,-32.03035zM112.62951,17.2168l-55.47491,32.03035c0.02667,9.43125 0.28655,100.95927 0.32948,116.13747l73.91271,-42.67698l-0.26487,-94.4695l-15.83428,9.14138c-0.53762,0.30969 -1.20001,0.30969 -1.73783,0c-0.54105,-0.31131 -0.86891,-0.88426 -0.87215,-1.50526zM116.11809,17.26848l0.04522,15.55649l13.27599,-7.66196zM107.11238,36.91436c0.67343,-0.084 1.365,0.22485 1.72491,0.85277c0.48331,0.83379 0.20067,1.90216 -0.63311,2.38386l-42.54778,24.5622c-0.83715,0.48083 -1.90277,0.19134 -2.3774,-0.63957c-0.48331,-0.83399 -0.20067,-1.89591 0.63312,-2.3774l42.54778,-24.5622c0.20764,-0.11957 0.42802,-0.19165 0.65249,-0.21965zM40.64198,41.67563l0.32302,116.11809l13.0305,7.57152c-0.07992,-28.3557 -0.24636,-88.91573 -0.32302,-116.11809zM123.55394,47.61268c0.67339,-0.08422 1.365,0.23131 1.72491,0.85923c0.48331,0.83379 0.19421,1.8957 -0.63957,2.3774l-37.70899,21.77133c-0.83746,0.481 -1.90894,0.19134 -2.38386,-0.63957c-0.48311,-0.83379 -0.19421,-1.89591 0.63957,-2.3774l37.71545,-21.77133c0.20759,-0.11997 0.42803,-0.19158 0.6525,-0.21965zM123.55394,67.80123c0.67339,-0.08488 1.365,0.22995 1.72491,0.85922c0.48331,0.83379 0.19421,1.89571 -0.63957,2.3774l-28.22521,16.29943c-0.83926,0.48168 -1.9034,0.18971 -2.3774,-0.63957c-0.48311,-0.83399 -0.20067,-1.90217 0.63311,-2.38387l28.23167,-16.29297c0.20759,-0.12037 0.42803,-0.19136 0.6525,-0.21965zM74.11298,70.24324c0.78271,-0.04421 1.42592,0.37107 1.71845,1.04657l9.60006,22.08789c0.38116,0.88143 -0.02281,1.91065 -0.90445,2.29342c-0.87457,0.38459 -1.90883,-0.0214 -2.29342,-0.90445l-2.88777,-6.63477l-9.47731,5.47191l-3.41106,11.94516c-0.21783,0.76575 -0.91434,1.25977 -1.67323,1.25977c-0.15667,0 -0.31817,-0.02039 -0.47807,-0.06461c-0.92241,-0.26548 -1.46064,-1.22565 -1.19516,-2.15129c3.53945,-12.39972 6.12577,-21.46157 9.44501,-33.08984c0.20088,-0.70781 0.82531,-1.2103 1.55694,-1.25977zM74.57167,77.13642l-3.32708,11.64799l6.70583,-3.86974zM123.55394,87.98978c0.67339,-0.08465 1.365,0.22995 1.72491,0.85923c0.48331,0.83379 0.19421,1.8957 -0.63957,2.3774l-58.98288,34.05889c-0.83829,0.48148 -1.90326,0.19048 -2.3774,-0.63957c-0.48331,-0.83379 -0.20067,-1.90237 0.63312,-2.38386l58.98933,-34.05243c0.20759,-0.11997 0.42803,-0.19144 0.6525,-0.21965zM123.55394,108.17833c0.67339,-0.084 1.365,0.23131 1.72491,0.85923c0.48331,0.83379 0.19421,1.8957 -0.63957,2.3774l-58.98288,34.05889c-0.83493,0.47955 -1.90158,0.19372 -2.3774,-0.63958c-0.48331,-0.83379 -0.20067,-1.8957 0.63312,-2.3774l58.98933,-34.05889c0.20759,-0.11957 0.42803,-0.19165 0.6525,-0.21965z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endcan
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="/dashboard/myarticle">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="mb-0 text-capitalize font-weight-bolder" style="font-size: 20px">
                                        Artikel Saya</p>

                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                        viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M34.9375,10.75c-4.44728,0.01328 -8.04922,3.61522 -8.0625,8.0625v8.0625h61.8125c4.44728,0.01328 8.04922,3.61522 8.0625,8.0625v43c-0.01328,4.44728 -3.61522,8.04922 -8.0625,8.0625h-26.875v13.4375c0.00444,1.08723 -0.65504,2.06708 -1.66394,2.47229c-0.31957,0.15107 -0.67021,0.22479 -1.02356,0.21521c-0.71446,0.00341 -1.40128,-0.27585 -1.91065,-0.77685l-15.31665,-15.34815h-15.02271v67.1875c0.01328,4.44728 3.61522,8.04922 8.0625,8.0625h96.75c4.44728,-0.01328 8.04922,-3.61522 8.0625,-8.0625v-61.62354l-43.2677,43.2677c-0.26669,0.26959 -0.5867,0.48054 -0.93958,0.61939l-24.7019,9.48499c-0.30607,0.12693 -0.63448,0.19118 -0.96582,0.18896c-0.71446,0.00341 -1.40128,-0.27585 -1.91065,-0.77685c-0.75644,-0.75343 -0.98804,-1.88665 -0.58789,-2.87647l9.48499,-24.7019c0.13884,-0.35288 0.3498,-0.67289 0.61939,-0.93958l62.26917,-62.26916v-15.93604h-16.125c-4.44728,-0.01328 -8.04922,-3.61522 -8.0625,-8.0625v-18.8125zM120.9375,15.0752v14.4873c0,1.48427 1.20323,2.6875 2.6875,2.6875h12.76563zM13.4375,32.25c-1.48427,0 -2.6875,1.20323 -2.6875,2.6875v43c0,1.48427 1.20323,2.6875 2.6875,2.6875h29.5625c0.71301,0.00398 1.39716,0.28215 1.91065,0.77685l11.52685,11.55835v-9.64771c0,-1.48427 1.20323,-2.6875 2.6875,-2.6875h29.5625c1.48427,0 2.6875,-1.20323 2.6875,-2.6875v-43c0,-1.48427 -1.20323,-2.6875 -2.6875,-2.6875zM21.5,43h5.375v5.375h-5.375zM32.25,43h48.375v5.375h-48.375zM149.6969,51.22522l-7.60583,7.60583l11.39563,11.39038l7.60583,-7.60583zM21.5,53.75h59.125v5.375h-59.125zM138.29602,62.6261l-55.11474,55.11475l3.79504,3.79504l55.11475,-55.11474zM21.5,64.5h59.125v5.375h-59.125zM145.88611,70.21619l-55.10425,55.13049l3.80029,3.79504l55.099,-55.13049zM80.40979,122.54895l-2.12061,5.51148l5.96289,5.96289l5.51148,-2.12061zM76.18957,133.5404l-1.6377,4.22022l4.22022,-1.6377z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mb-xl-0 mb-4">
            <a href="/dashboard/profile">
                <div class="card mb-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="mb-0 text-capitalize font-weight-bolder" style="font-size: 20px">Profile
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                        viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g fill="#ffffff">
                                                <path
                                                    d="M86,17.2c-20.4508,0 -34.4,15.00037 -34.4,36.70677c0,14.81972 7.46041,31.02657 17.2,40.67083v14.35573c-5.73333,17.2 -51.6,5.73333 -51.6,45.86667h137.6c0,-40.13333 -45.86667,-28.66667 -51.6,-45.86667v-14.35573c9.73959,-9.64427 17.2,-25.85111 17.2,-40.67083c0,-21.7064 -13.9492,-36.70677 -34.4,-36.70677z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<footer class="footer py-4  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    developed by
                    <strong><a>Kelompok 3 Pemrograman Web 2020 SI B</a></strong>
                    <br> template by <a style="text-decoration: none;"
                        href="https://github.com/creativetimofficial/material-dashboard"
                        target="_blank">creativetimofficial</a>
                    <br> icon by <a style="text-decoration: none;" target="_blank" href="https://icons8.com">Icons8</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection