@extends('layouts.app')

@section('title', 'Pengelolaan Stok - Mofusand Shop')

@section('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #1a1a1a, #3a3a3a);
        border-radius: 20px;
        padding: 30px 40px;
        color: #ffffff;
        margin-bottom: 30px;
    }
    .page-header h2 {
        font-weight: bold;
        margin: 0;
    }
    .page-header p {
        color: #f4a7b9;
        margin: 0;
    }
    .badge-plushie {
        background-color: #f4a7b9;
        color: #1a1a1a;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: bold;
    }
    .badge-keychain {
        background-color: #1a1a1a;
        color: #f4a7b9;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: bold;
    }
    .table-wrapper {
        background: #ffffff;
        border-radius: 20px;
        border: 2px solid #f4a7b9;
        padding: 25px;
        box-shadow: 0 8px 24px rgba(244, 167, 185, 0.2);
    }
    .table thead {
        background-color: #1a1a1a;
        color: #ffffff;
    }
    .table thead th {
        border: none;
        padding: 15px;
    }
    .table tbody tr:hover {
        background-color: #fff0f5;
    }
    .stok-low {
        color: #c0392b;
        font-weight: bold;
    }
    .stok-ok {
        color: #27ae60;
        font-weight: bold;
    }
    .btn-back {
        background: #1a1a1a;
        color: #ffffff;
        border-radius: 10px;
        padding: 10px 25px;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.3s;
    }
    .btn-back:hover {
        background: #c0392b;
        color: #ffffff;
    }
</style>
@endsection

@section('content')

{{-- Header --}}
<div class="page-header">
    <h2>📦 Pengelolaan Stok</h2>
    <p>Halo {{ $username }}! Berikut daftar inventaris produk.</p>
</div>

{{-- Tabel --}}
<div class="table-wrapper">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">Daftar Inventaris Produk</h5>
        <a href="{{ route('dashboard') }}" class="btn-back">← Dashboard</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventaris as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>
                        @if($item['kategori'] == 'Plushie')
                            <span class="badge-plushie"> Plushie</span>
                        @else
                            <span class="badge-keychain">Keychain</span>
                        @endif
                    </td>
                    <td class="{{ $item['stok'] <= 7 ? 'stok-low' : 'stok-ok' }}">
                        {{ $item['stok'] }} pcs
                    </td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td>
                        @if($item['stok'] <= 7)
                            <span class="badge bg-danger">Stok Menipis!</span>
                        @else
                            <span class="badge bg-success">Stok Aman</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <small class="text-muted">Total {{ count($inventaris) }} produk terdaftar</small>
</div>

@endsection
