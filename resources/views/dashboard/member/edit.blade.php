@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-10 mx-2">
            <form method="post" action="/dashboard/member/{{ $member->id }}" enctype="multipart/form-data"
                class="form-horizontal" role="form">
                @method('put')
                @csrf
                <div class="form-group" style="display:flex;">
                    <label for="name" class="col-sm-3 col-form-label @error('name') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Nama
                        Lengkap &nbsp; </label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}"
                            required disabled>
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
                            value="{{ old('email',  $member->email) }}" required>
                    </div>
                    @error('email')
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