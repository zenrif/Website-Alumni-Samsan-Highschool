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
    <h3>Data Super Admin</h3>
    <table id="data_super_admin" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th style="width:10px;">No</th>
                <th>Nama</th>
                @can('admin')
                <th>Email</th>
                @endcan
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Akun Instagram</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($super_admin as $s_admin)
            <tr>
                <td style="width:10px; text-align:center;">{{ $loop->iteration }}</td>
                <td>{{ $s_admin->name }}</td>
                @can('admin')
                <td>{{ $s_admin->email }}</td>
                @endcan
                <td>{{ $s_admin->alamat }}</td>
                <td>{{ $s_admin->pekerjaan }}</td>
                <td>{{ $s_admin->nomor_telepon }}</td>
                <td>{{ $s_admin->akun_ig }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Data Admin</h3>
    <table id="data_admin" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th style="width:10px;">No</th>
                <th>Nama</th>
                @can('admin')
                <th>Email</th>
                @endcan
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
            @foreach ($admins as $admin)
            <tr>
                <td style="width:10px; text-align:center;">{{ $loop->iteration }}</td>
                <td>{{ $admin->name }}</td>
                @can('admin')
                <td>{{ $admin->email }}</td>
                @endcan
                <td>{{ $admin->alamat }}</td>
                <td>{{ $admin->pekerjaan }}</td>
                <td>{{ $admin->nomor_telepon }}</td>
                <td>{{ $admin->akun_ig }}</td>
                @can('super_admin')
                <td>
                    <form method="post" action="/dashboard/admin/{{ $admin->id }}" enctype="multipart/form-data"
                        class="form-horizontal" role="form">
                        @method('put')
                        @csrf
                        <input type="hidden" name="is_admin" value='0'>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus Admin</button>
                        {{-- <a href="{{ route('member.edit', $admin->id) }}" class="btn btn-danger btn-sm">Hapus
                            Admin</a> --}}
                        {{-- <form action="{{ route('member.destroy', $member->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form> --}}
                    </form>
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3 class="mt-3">Data Member</h3>
    <table id="data_member" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th style="width:10px;">No</th>
                <th>Nama</th>
                @can('admin')
                <th>Email</th>
                @endcan
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
                <td>{{ $member->alamat }}</td>
                <td>{{ $member->pekerjaan }}</td>
                <td>{{ $member->nomor_telepon }}</td>
                <td>{{ $member->akun_ig }}</td>
                @can('super_admin')
                <td>
                    <form method="post" action="/dashboard/admin/{{ $member->id }}" enctype="multipart/form-data"
                        class="form-horizontal" role="form">
                        @method('put')
                        @csrf
                        <input type="hidden" name="is_admin" value='1'>
                        <button type="submit" class="btn btn-success btn-sm">Tambah Admin</button>
                        {{-- <a href="{{ route('member.edit', $admin->id) }}" class="btn btn-danger btn-sm">Hapus
                            Admin</a> --}}
                    </form>
                    <form action="/dashboard/admin/{{ $member->id  }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm" type="submit"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data dan artikel member ini?')">Hapus</button>
                    </form>
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
                $('#data_member').DataTable();
            });
        $(document).ready(function() {
                $('#data_admin').DataTable();
            });
        $(document).ready(function() {
                $('#data_super_admin').DataTable();
            });
    </script>
</div>

@endsection