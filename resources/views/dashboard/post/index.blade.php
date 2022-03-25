@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid py-4 mt-2">
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
    <a href="/dashboard/myarticle/create" class="btn btn-info mb-4">Buat Artikel</a>
    <table id="data_posts" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th style="width:10px;">No</th>
                <th>judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td style="width:10px; text-align:center;">{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="/dashboard/myarticle/{{ $post->slug }}" class="badge bg-success">Detail</a>
                    {{-- <a href="{{ route('dashboard.myarticle.edit', $post->id) }}"
                        class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dashboard.myarticle.destroy', $post->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach

    </table>
    <script>
        $(document).ready(function() {
                $('#data_posts').DataTable();
            });
    </script>
</div>

@endsection