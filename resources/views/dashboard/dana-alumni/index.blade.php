@extends('dashboard.layouts.main')

@section('content')
<div class="container-fluid py-4 mt-2">
    @can('admin')
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
    <a href="/dashboard/dana-alumni/create" class="btn btn-info mb-4">Tambah Transaksi</a>
    @endcan
    <table id="data_fund" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th style="text-align:center;">Uang Masuk</th>
                <th style="text-align:center;">Uang Keluar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funds as $fund)
            <tr>
                <td style="width:10px; text-align:center;">{{ $loop->iteration }}</td>
                <td>{{ $fund->tgl_transaksi }}</td>
                <td style="text-align:center;">Rp{{ isset($fund->uang_masuk)? number_format($fund->uang_masuk, 0, '
                    ',
                    '.') : '0,-' }}</td>
                <td style="text-align:center;">Rp{{ isset($fund->uang_keluar)? number_format($fund->uang_keluar, 0, '
                    ',
                    '.') : '0,-' }}</td>
                <td>
                    <a href="/dashboard/dana-alumni/{{ $fund->slug }}" class="badge bg-success">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Dana Alumni</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rp{{ isset($saldo)?
                            number_format($saldo->saldo, 0, '
                            ',
                            '.') : '0,-' }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ingin Berdonasi?</h5>
                        <a class="card-subtitle mb-2 text-muted" href="https://wa.wizard.id/ea1140" target="_blank">Klik
                            Disini <img src="https://img.icons8.com/color/30/000000/whatsapp--v1.png" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
                $('#data_fund').DataTable({
                    responsive: true
                });
            });
    </script>
</div>


@endsection