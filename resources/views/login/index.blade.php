@extends('layouts.mainLogin')

@section('container')
<section class="min-vh-100 mb-2">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('dasbor/assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @elseif(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif
                    <h1 class="text-white mb-2 mt-2">Welcome!</h1>
                    <p class="text-lead text-white">Silahkan masukkan email dan password anda.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Login</h5>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="password"
                                    class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Password" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-check form-check-info text-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    onclick="showPassword()">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Show Password
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
                            </div>
                            <div>
                                <a class="small" style="cursor: pointer; color:rgb(92, 224, 75); text-decoration: none;"
                                    href="/forget-password"><b>Lupa
                                        Password</b></a>
                            </div>
                            <p class="text-sm mt-3 mb-0">Belum punya akun? <a href="/register"
                                    class="text-dark font-weight-bolder">Buat akun</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection