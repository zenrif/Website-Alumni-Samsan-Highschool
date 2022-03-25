@extends('layouts.main')

@section('container')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('/assets/img/slide/slide-1.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Alumni</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="/about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
                {{-- Mengecek apakah ada postingan atau tidak --}}
                @if($last_post)
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('/img/artikel.webp');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $last_post->title }}</h2>
                            <p class="animate__animated animate__fadeInUp">{{ $last_post->excerpt }}</p>
                            <a href="/artikel/{{ $last_post->slug }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('/img/hbd.webp');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Happy Birthday</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#hbd" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<!-- ======= Counts Section ======= -->
<section class="counts section-bg mt-3">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="count-box">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 226 226"
                        style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,226v-226h226v226z" fill="none"></path>
                            <g fill="#20b38e">
                                <path
                                    d="M190.6875,63.5625c-0.0038,-2.31102 -1.13804,-4.47397 -3.03688,-5.79125l-70.625,-49.4375c-2.42099,-1.67951 -5.63026,-1.67951 -8.05125,0l-70.625,49.4375c-1.89251,1.32098 -3.02018,3.48331 -3.02018,5.79125c0,2.30794 1.12767,4.47027 3.02018,5.79125l32.27563,22.45875v7.83937c0.08422,11.95452 5.21414,23.31729 14.125,31.28688c1.10593,0.93237 2.26113,1.80467 3.46063,2.61312v7.69813h-3.46063c-27.30358,0 -49.4375,22.13392 -49.4375,49.4375v7.0625c0,11.70153 9.48597,21.1875 21.1875,21.1875h113c11.70153,0 21.1875,-9.48597 21.1875,-21.1875v-7.0625c0,-27.30358 -22.13392,-49.4375 -49.4375,-49.4375h-3.88438v-7.0625c11.36579,-8.44736 18.04871,-21.78699 18.00938,-35.94813v-6.42687l21.1875,-14.83125v21.89375c0,3.90051 3.16199,7.0625 7.0625,7.0625c3.90051,0 7.0625,-3.16199 7.0625,-7.0625zM141.25,79.59438c-18.68075,-3.39034 -37.81925,-3.39034 -56.5,0v-14.125c18.63304,-3.88441 37.86696,-3.88441 56.5,0zM176.5625,190.6875v7.0625c0,3.90051 -3.16199,7.0625 -7.0625,7.0625h-113c-3.90051,0 -7.0625,-3.16199 -7.0625,-7.0625v-7.0625c0,-19.50256 15.80994,-35.3125 35.3125,-35.3125h3.6725c2.10989,11.74345 12.32821,20.2895 24.25969,20.2895c11.93148,0 22.1498,-8.54605 24.25969,-20.2895h4.30812c19.50256,0 35.3125,15.80994 35.3125,35.3125zM123.24063,150.99625c0,5.85077 -4.74298,10.59375 -10.59375,10.59375c-5.85077,0 -10.59375,-4.74298 -10.59375,-10.59375v-10.52312c3.58309,1.03283 7.28879,1.57918 11.0175,1.62437c1.36446,0.07218 2.73179,0.07218 4.09625,0c2.05454,-0.19256 4.08743,-0.57077 6.07375,-1.13zM115.825,127.83125c-7.96848,0.80096 -15.90245,-1.81786 -21.82836,-7.20505c-5.92591,-5.38719 -9.28679,-13.03642 -9.24664,-21.04495v-5.72062c18.64114,-3.80511 37.85886,-3.80511 56.5,0v4.16687c0.41692,14.98287 -10.56361,27.85451 -25.425,29.80375zM155.375,74.72125v-14.125c0.13774,-3.22311 -1.92606,-6.12989 -5.01438,-7.0625c-24.5017,-6.35515 -50.21955,-6.35515 -74.72125,0c-3.08831,0.93261 -5.15212,3.83939 -5.01437,7.0625v14.125l-15.96125,-11.15875l58.33625,-40.82125l58.33625,40.82125z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span data-purecounter-start="0" data-purecounter-end="511" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p style="font-size: 30px; font-weight: bold">Alumni</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center">
                <div class="count-box">
                    <img
                        src="https://img.icons8.com/external-xnimrodx-lineal-gradient-xnimrodx/70/000000/external-article-marketing-xnimrodx-lineal-gradient-xnimrodx.png" />
                    <span data-purecounter-start="0" data-purecounter-end="{{ $jumlah_artikel }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-size: 30px; font-weight: bold">Artikel</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center">
                <div class="count-box">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 172 172"
                        style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#46d1ff">
                                <path
                                    d="M132.96406,143.05563h39.25094l-0.22844,-3.64156c-1.06156,-17.91219 -15.27844,-23.52906 -26.70031,-28.03063c-6.3425,-2.51281 -12.34906,-4.87781 -14.09594,-8.69406c-0.26875,-3.225 -0.24188,-5.73781 -0.215,-8.62688v-1.16906c2.74125,-2.86219 5.21375,-8.4925 6.19469,-13.20906c2.10969,-1.19594 4.63594,-3.95063 5.40188,-10.29313c0.37625,-3.18469 -0.51063,-5.67062 -1.77375,-7.36375c1.73344,-5.99312 5.0525,-20.78781 -0.91375,-30.38219c-2.53969,-4.085 -6.35594,-6.67844 -11.38156,-7.71313c-2.87563,-3.49375 -8.21031,-5.38844 -15.33219,-5.38844c-8.17,0.16125 -14.68719,2.15 -19.48438,5.84531c-2.16344,-1.38406 -4.6225,-2.39188 -7.44437,-2.94281c-3.25188,-4.11187 -9.47344,-6.3425 -17.83156,-6.3425c-12.67156,0.24188 -21.93,4.11188 -27.54688,11.5025c-6.65156,8.76125 -7.88781,22.05094 -3.68187,39.50625c-1.54531,1.89469 -2.6875,4.81063 -2.23063,8.64031c0.91375,7.59219 3.85656,10.68281 6.3425,11.91906c1.1825,5.95281 4.43438,12.65812 7.59219,15.81594l0.01344,1.6125c0.02687,3.48031 0.05375,6.51719 -0.28219,10.4275c-2.09625,4.8375 -9.11063,7.59219 -17.18656,10.77687c-13.45094,5.28094 -30.18063,11.85188 -31.43031,32.73375l-0.215,3.64156h138.03l-0.215,-3.64156c-0.37625,-6.1275 -2.09625,-10.99187 -4.63594,-14.98281zM7.32344,154.8c2.59344,-13.6525 14.79469,-18.43625 26.61969,-23.09906c9.43312,-3.69531 18.32875,-7.2025 21.29844,-15.1575l0.20156,-0.90031c0.40312,-4.48813 0.37625,-7.94156 0.33594,-11.61l-0.01344,-3.18469l0.06719,-2.0425l-1.84094,-0.9675c-1.505,-1.02125 -5.53625,-7.955 -6.19469,-14.16312l-0.30906,-2.83531l-2.83531,-0.22844c-0.44344,-0.04031 -2.21719,-1.27656 -2.86219,-6.67844c-0.33594,-2.76813 1.02125,-3.74906 1.02125,-3.74906l2.19031,-1.33031l-0.645,-2.4725c-4.17906,-16.07125 -3.48031,-28.38 2.00219,-35.60937c4.27312,-5.64375 11.74437,-8.6 22.11812,-8.78813c6.46344,0 11.23375,1.6125 12.77906,4.31344l0.83312,1.47813l1.67969,0.22844c4.59562,0.645 7.86094,2.59344 9.97062,5.99313c5.28094,8.50594 2.21719,24.21437 -0.41656,32.15594l-0.72562,2.58l2.20375,1.45125c0.01344,0 1.35719,0.98094 1.02125,3.74906c-0.645,5.40187 -2.41875,6.63812 -2.86219,6.67844l-2.83531,0.24187l-0.30906,2.82188c-0.65844,6.235 -4.56875,13.16875 -5.93937,14.13625l-1.84094,0.9675l-0.01344,5.2675c-0.04031,3.66844 -0.06719,7.10844 0.33594,11.59656l0.20156,0.90031c2.95625,7.955 11.825,11.44875 21.21781,15.1575c6.73219,2.66063 13.57187,5.375 18.69156,9.74219c0.34937,0.55094 0.81969,1.00781 1.41094,1.29c3.13094,3.07719 5.44219,6.96062 6.42312,12.06687z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span data-purecounter-start="0" data-purecounter-end="{{ $jumlah_members }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p style="font-size: 30px; font-weight: bold">Members</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Counts Section -->

<!-- ======= Services Section ======= -->
<section id="hbd" class="services">
    <div class="container">
        <div class="row">
            {{-- {{ dd($data_ultah) }} --}}
            <div class="section-title">
                <h2>Happy Birthday</h2>
            </div>
            @foreach ($data_ultah as $ultah)
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-5 py-5 my-5">
                        <br>
                        <br>
                        <br>
                        <p class="ukuran-font">{{ $ultah->nama }}</p>
                    </div>
                    <img src="{{ asset('/img/20220323_190301_0000.png') }}" class="img-fluid">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Services Section -->

{{-- <script>
    if (window.matchMedia("(min-width: 800px)").matches)
    {
    $("#loading").css ("display", "inline");
    }
</script> --}}
@endsection