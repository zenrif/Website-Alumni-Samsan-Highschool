@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid py-4 mt-2">
    <table id="data_member" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                @can('admin')
                <th>Email</th>
                @endcan
                <th>Tahun</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Akun Instagram</th>
                @can('super_admin')
                <th>Aksi</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr>
                <td style="width:10px; text-align:center;">{{ $loop->iteration }}</td>
                <td>{{ $member->name }}</td>
                @can('admin')
                <td>{{ $member->email }}</td>
                @endcan
                <td>{{ $member->tahun }}</td>
                <td>{{ $member->pekerjaan }}</td>
                <td>{{ $member->alamat }}</td>
                <td>{{ $member->nomor_telepon }}</td>
                <td>{{ $member->akun_ig }}</td>
                @can('super_admin')
                <td>
                    <a href="{{ route('member.edit', $member->id) }}" class="btn btn-success btn-sm">Edit</a>
                    {{-- <form action="{{ route('member.destroy', $member->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </form> --}}
                </td>
                @endcan
            </tr>
            @endforeach

    </table>
    <script>
        $(document).ready(function() {
                $('#data_member').DataTable({
                    responsive: true
                });
            });
    </script>
</div>

@endsection