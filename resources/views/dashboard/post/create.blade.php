@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-10 mx-2">
            <form method="post" action="/dashboard/myarticle" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="form-group" style="display:flex;">
                    <label for="title" class="col-sm-3 col-form-label @error('title') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Judul
                        &nbsp; &nbsp; &nbsp; &nbsp; </label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                            required>
                    </div>
                    @error('title')
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
                    <label for="isi" class="col-sm-3 col-form-label @error('isi') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Isi Artikel &nbsp;</label>
                    <textarea class="form-control" id="isi" name="body" value="{{ old('body') }}"></textarea>
                    @error('isi')
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
    // CKEditor 5
    // ClassicEditor
    // .create( document.querySelector( '#isi' ) )
    // .catch( error => {
    // console.error( error );
    // });
    // CKEditor 4
    CKEDITOR.replace(isi);
    
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