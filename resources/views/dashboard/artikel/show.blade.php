@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid py-4 mt-2">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a class="btn btn-success" onClick="javascript:history.back()">Kembali</a>
            <form action="/dashboard/artikel/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')"><span
                        data-feather="x-circle"></span>Hapus</button>
            </form>
            <p>Penulis : {{ $post->author->name }}
                <br>
                Dibuat pada {{ date('d/m/Y', strtotime($post->created_at)) }}
            </p>
            @if($post->image)
            <div style="overflow:hidden;">
                <img src="{{ asset('post-images/'. $post->image) }}" class="img-fluid mt-3">
            </div>
            {{-- @else
            <img src="https://source.unsplash.com/1200x400?anime" class="img-fluid mt-3"> --}}
            @endif

            <article class="text-black my-3 fs-5">
                <p>{!! $post->body !!} </p>
            </article>
        </div>
    </div>
</div>
@endsection