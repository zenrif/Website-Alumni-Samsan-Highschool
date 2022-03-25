@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid py-4 mt-2">
    <div class="row">
        <div class="col-lg-8">
            <a class="btn btn-success" onClick="javascript:history.back()">Kembali</a>
            @can('admin')
            <a href="/dashboard/dana-alumni/{{ $fund->slug }}/edit" class="btn btn-warning"><span
                    data-feather="edit"></span>Edit</a>
            {{-- <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a> --}}
            <form action="/dashboard/dana-alumni/{{ $fund->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')"><span
                        data-feather="x-circle"></span>Hapus</button>
            </form>
            @endcan

            <p style="color:black;">Diunggah oleh : {{ $fund->uploader->name }}
            <div class="form-group" style="display:flex;">
                <label class="col-sm-3 col-form-label" style="color:black; font-weight:bold;">Tanggal Transaksi
                    &nbsp; &nbsp; &nbsp; &nbsp; </label>
                <div class="col-sm-5 mb-3">
                    <input type="date" class="form-control" value="{{ $fund->tgl_transaksi }}" disabled>
                </div>
            </div>
            <div class="form-group" style="display:flex;">
                <label class="col-sm-3 col-form-label" style="color:black; font-weight:bold;">Uang Masuk
                    &nbsp; &nbsp; &nbsp; &nbsp; </label>
                <div class="col-sm-5 mb-3">
                    <input type="text" class="form-control" value="Rp{{ isset($fund->uang_masuk)? number_format($fund->uang_masuk, 0, '
                    ',
                    '.') : '0,-' }}" disabled>
                </div>
            </div>
            <div class="form-group" style="display:flex;">
                <label class="col-sm-3 col-form-label" style="color:black; font-weight:bold;">Uang Keluar
                    &nbsp; &nbsp; &nbsp; &nbsp; </label>
                <div class="col-sm-5 mb-3">
                    <input type="text" class="form-control" value="Rp{{ isset($fund->uang_keluar)? number_format($fund->uang_keluar, 0, '
                    ',
                    '.') : '0,-' }}" disabled>
                </div>
            </div>

            <div class="form-group" style="display:flex;">
                <label class="col-sm-3 col-form-label" style="color:black; font-weight:bold;">Gambar Bukti
                    &nbsp; &nbsp; &nbsp; &nbsp; </label>
                <div class="col-sm-5 mb-3">
                    @if($fund->image)
                    <div style="overflow:hidden;">
                        <img src="{{ asset('fund-images/'. $fund->image) }}" class="img-fluid mt-3">
                    </div>
                    @else
                    <p>Gambar bukti transaksi belum diunggah</p>
                    @endif
                </div>
            </div>

            <div class="form-group" style="display:flex;">
                <label class="col-sm-3 col-form-label" style="color:black; font-weight:bold;">Keterangan
                    &nbsp; &nbsp; &nbsp; &nbsp; </label>
                <div class="col-sm-5 mb-3">
                    <article class="text-black my-3 fs-5">
                        <p>{!! $fund->keterangan !!} </p>
                    </article>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection