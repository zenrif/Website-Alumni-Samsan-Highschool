@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-10 mx-2">
            <form method="post" action="/dashboard/dana-alumni" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="form-group" style="display:flex;">
                    <label for="tgl_transaksi"
                        class="col-sm-3 col-form-label @error('tgl_transaksi') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Tanggal Transaksi
                        &nbsp; &nbsp; &nbsp; &nbsp; </label>
                    <div class="col-sm-5 mb-3">
                        <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi"
                            value="{{ old('tgl_transaksi') }}" required>
                    </div>
                    @error('tgl_transaksi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="jenis_transaksi"
                        class="col-sm-3 col-form-label @error('jenis_transaksi') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Jenis Transaksi
                        &nbsp; &nbsp; &nbsp; &nbsp; </label>
                    <div class="col-sm-5 mb-3">
                        <select class="form-select" id="jenis_transaksi" name="jenis_transaksi">
                            <option value="pemasukan">Uang Masuk</option>
                            <option value="pengeluaran">Uang Keluar</option>
                        </select>
                    </div>
                    @error('jenis_transaksi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="jumlah" class="col-sm-3 col-form-label @error('jumlah') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Jumlah
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;</label>
                    <div class="col-sm-5 mb-3">
                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah') }}"
                            placeholder="Jumlah diisi angka saja" required>
                    </div>
                    @error('jumlah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="image" class="col-sm-3 col-form-label">Gambar &nbsp; &nbsp;</label>
                    <div class="col-sm-5 mb-2">
                        <img class="img-preview img-fluid mb-3 col-5">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image" onchange="previewImage()">
                    </div>
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan" class="col-sm-3 col-form-label @error('keterangan') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Keterangan &nbsp;</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"
                        value="{{ old('keterangan') }}"></textarea>
                    @error('keterangan')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-sm-12">
                    <div class="justify-content-end mt-4" style="float:right;">
                        <button type="button" class="btn btn-success"
                            onClick="javascript:history.back()">Kembali</button>
                        <button type="submit" class="btn btn-info">Buat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace(keterangan);
    
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
    
</script>

@endsection