@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid">
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ auth()->user()->name }}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        {{ auth()->user()->is_admin ? 'Administrator' : 'User'}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif
                </div>
            </div>
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Informasi Akun</h6>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="/dashboard/profile/{{ auth()->user()->id }}/edit">
                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Edit Profile"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nama
                                Lengkap:</strong> &nbsp; {{ auth()->user()->name }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                            &nbsp; {{ auth()->user()->email }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Tahun:</strong>
                            &nbsp; {{ auth()->user()->tahun }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Alamat:</strong>
                            &nbsp; {{ auth()->user()->alamat }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Pekerjaan:</strong>
                            &nbsp; {{ auth()->user()->pekerjaan }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Nomor
                                Telepon:</strong>
                            &nbsp; {{ auth()->user()->nomor_telepon }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Akun
                                Instagram:</strong>
                            &nbsp; {{ auth()->user()->akun_ig }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection