@extends('layouts.app')

@section('title', 'Dashboard - Mofusand Shop')

@section('styles')
<style>
    .welcome-banner {
        background: linear-gradient(135deg, #1a1a1a, #3a3a3a);
        border-radius: 20px;
        padding: 40px;
        color: #ffffff;
        margin-bottom: 30px;
    }
    .welcome-banner h2 {
        font-size: 2rem;
        font-weight: bold;
    }
    .welcome-banner p {
        color: #f4a7b9;
        font-size: 1rem;
    }
    .stat-card {
        background: #ffffff;
        border-radius: 15px;
        border: 2px solid #f4a7b9;
        padding: 25px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(244, 167, 185, 0.2);
        transition: transform 0.2s;
    }
    .stat-card:hover {
        transform: translateY(-5px);
    }
    .stat-card h3 {
        font-size: 2rem;
        font-weight: bold;
        color: #c0392b;
    }
    .stat-card p {
        color: #888;
        margin: 0;
    }
    .stat-icon {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }
    .menu-card {
        background: #ffffff;
        border-radius: 15px;
        border: 2px solid #f4a7b9;
        padding: 25px;
        text-align: center;
        text-decoration: none;
        color: #1a1a1a;
        display: block;
        transition: all 0.2s;
        box-shadow: 0 4px 12px rgba(244, 167, 185, 0.2);
    }
    .menu-card:hover {
        background: #1a1a1a;
        color: #ffffff;
        transform: translateY(-5px);
    }
    .menu-card .icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }
</style>
@endsection

@section('content')

{{-- Welcome Banner --}}
<div class="welcome-banner">
    <h2>Halo, {{ $username }}! 👋</h2>
    <p>Selamat Datang di Inventaris Mofusand</p>
    <small style="color: #aaa;">{{ now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</small>
</div>

{{-- Statistik --}}
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="stat-card">
            <div class="stat-icon">🧸</div>
            <h3>4</h3>
            <p>Total Produk Plushie</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="stat-card">
            <div class="stat-icon">🔑</div>
            <h3>4</h3>
            <p>Total Produk Keychain</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="stat-card">
            <div class="stat-icon">📦</div>
            <h3>8</h3>
            <p>Total Semua Produk</p>
        </div>
    </div>
</div>

{{-- Menu Navigasi --}}
<h5 class="fw-bold mb-3" style="color: #1a1a1a;">Menu Utama</h5>
<div class="row">
    <div class="col-md-4 mb-3">
        <a href="{{ route('pengelolaan') }}" class="menu-card">
            <div class="icon">📋</div>
            <h6 class="fw-bold">Pengelolaan Stok</h6>
            <small>Lihat dan kelola inventaris</small>
        </a>
    </div>
    <div class="col-md-4 mb-3">
        <a href="{{ route('profile') }}" class="menu-card">
            <div class="icon">👤</div>
            <h6 class="fw-bold">Profile</h6>
            <small>Lihat informasi akun</small>
        </a>
    </div>
    <div class="col-md-4 mb-3">
        <a href="{{ route('login') }}" class="menu-card" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="icon">🚪</div>
            <h6 class="fw-bold">Logout</h6>
            <small>Keluar dari sistem</small>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

@endsection
