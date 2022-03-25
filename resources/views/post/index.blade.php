@extends('layouts.main')

@section('container')

<section id="team" class="team">
    <div class="container" data-aos="fade-up">
        {{-- <h1 class="mb-3 text-center">{{ $title }}</h1> --}}
        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <form action="/artikel" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari berdasarkan judul atau isi..."
                            name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit" id="search">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        @if($posts->count())

        <div class="card mb-3">
            @if($posts[0]->image)
            <div style="max-height: 400px; overflow:hidden;">
                <img src="{{ asset('post-images/'. $posts[0]->image) }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?school" class="card-img-top">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title"><a href="/artikel/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{
                        $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By : {{$posts[0]->author->name }}
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/artikel/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more...</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        @if($post->image)
                        <img src="{{ asset('post-images/'. $post->image) }}" class="img-fluid">
                        @else
                        <img src="https://source.unsplash.com/1200x400?school" class=" card-img-top">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By : {{$post->author->name }}
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p>{{ $post->excerpt }}</p>
                            <a href="/artikel/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <p class="text-center fs-4">Artikel tidak ditemukan.</p>
        @endif

        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>

    </div>
</section>
@endsection