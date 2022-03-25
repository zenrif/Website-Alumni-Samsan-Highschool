@extends('layouts.main')

@section('container')

<section id="team" class="team">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>by : {{ $post->author->name }}
                    <br>
                    Dibuat pada {{ date('d/m/Y', strtotime($post->created_at)) }}
                </p>
                @if($post->image)
                <div style="overflow:hidden;">
                    <img src="{{ asset('post-images/'. $post->image) }}" class="img-fluid">
                </div>
                @endif


                <article class="my-3 fs-5">
                    <p>{!! $post->body !!} </p>
                </article>
                <div class="col-sm-12">
                    <div class="justify-content-end mt-4" style="float:right;">
                        <a class="btn btn-success" onClick="javascript:history.back()">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection