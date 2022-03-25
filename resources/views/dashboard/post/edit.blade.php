@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-10 mx-2">
            <form method="post" action="/dashboard/myarticle/{{ $post->slug }}" enctype="multipart/form-data"
                class="form-horizontal">
                @method('put')
                @csrf
                <div class="form-group" style="display:flex;">
                    <label for="title" class="col-sm-3 col-form-label @error('title') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Judul
                        &nbsp; &nbsp; &nbsp; &nbsp; </label>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $post->title) }}" required>
                    </div>
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;">
                    <label for="image" class="col-sm-3 col-form-label">Gambar &nbsp; &nbsp;</label>
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                    <div class="col-sm-5 mb-2">
                        @if($post->image)
                        <img src="{{ asset('post-images/'. $post->image) }}"
                            class="img-preview img-fluid mb-3 col-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 col-5">
                        @endif
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
                    <label for="isi" class="col-sm-3 col-form-label @error('body') is-invalid @enderror"
                        style="color:black; font-weight:bold;">Isi Artikel &nbsp;</label>
                    @error('body')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    {{-- <input id="isi" name="body" value="{{ $post->body }}"> --}}

                    <textarea class="form-control" id="isi" name="body"
                        value="{{ old('body') }}">{{ $post->body }}</textarea>

                </div>
                <div class="col-sm-12">
                    <div class="justify-content-end mt-4" style="float:right;">
                        <button type="button" class="btn btn-success"
                            onClick="javascript:history.back()">Kembali</button>
                        <button type="submit" class="btn btn-info">Edit</button>
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