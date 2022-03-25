@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-10 mx-2">
            <form method="post" action="/dashboard/profile/{{ auth()->user()->id }}" enctype="multipart/form-data"
                class="form-horizontal" role="form">
                @method('put')
                @csrf
                <div class="form-group" style="display:flex;">
                    <label for="name" class="col-sm-3 col-form-label @error('name') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Nama
                        Lengkap &nbsp; </label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $user->name) }}" required>
                    </div>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="email" class="col-sm-3 col-form-label @error('email') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp;</label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ old('email',  $user->email) }}" required>
                    </div>
                    @error('email')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="tahun" class="col-sm-3 col-form-label @error('tahun') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Tahun &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;</label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="tahun" name="tahun"
                            value="{{ old('tahun', $user->tahun )}}" required>
                    </div>
                    @error('tahun')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="alamat" class="col-sm-3 col-form-label @error('alamat') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;</label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="{{ old('alamat', $user->alamat )}}" required>
                    </div>
                    @error('alamat')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="pekerjaan" class="col-sm-3 col-form-label @error('pekerjaan') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Pekerjaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                            value="{{ old('pekerjaan', $user->pekerjaan )}}" required>
                    </div>
                    @error('pekerjaan')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="nomor_telepon"
                        class="col-sm-3 col-form-label @error('nomor_telepon') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Nomor Telepon &nbsp;</label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                            value="{{ old('nomor_telepon', $user->nomor_telepon) }}" required>
                    </div>
                    @error('nomor_telepon')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="akun_ig" class="col-sm-3 col-form-label @error('akun_ig') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Akun Instagram &nbsp;</label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="akun_ig" name="akun_ig"
                            value="{{ old('akun_ig', $user->akun_ig )}}" required>
                    </div>
                    @error('akun_ig')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-sm-8">
                    <div class="justify-content-end mt-4" style="float:right;">
                        <button type="button" class="btn btn-success"
                            onClick="javascript:history.back()">Kembali</button>
                        <button type="submit" class="btn btn-info">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection