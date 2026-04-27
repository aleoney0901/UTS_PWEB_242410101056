@extends('layouts.app')

@section('title', 'Profile - Mofusand Shop')

@section('styles')
<style>
    .profile-card {
        background: #ffffff;
        border-radius: 20px;
        border: 2px solid #f4a7b9;
        padding: 40px;
        box-shadow: 0 8px 24px rgba(244, 167, 185, 0.3);
    }
    .profile-avatar {
        width: 100px;
        height: 100px;
        background: #1a1a1a;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        margin: 0 auto 20px;
        border: 3px solid #f4a7b9;
    }
    .profile-username {
        font-size: 1.8rem;
        font-weight: bold;
        color: #1a1a1a;
        text-align: center;
    }
    .profile-badge {
        background: #1a1a1a;
        color: #f4a7b9;
        border-radius: 20px;
        padding: 5px 20px;
        font-size: 0.85rem;
        display: inline-block;
        margin: 10px auto;
    }
    .info-item {
        background: #fff0f5;
        border-radius: 12px;
        padding: 15px 20px;
        margin-bottom: 12px;
        border-left: 4px solid #f4a7b9;
    }
    .info-item label {
        font-size: 0.8rem;
        color: #888;
        margin-bottom: 2px;
        display: block;
    }
    .info-item span {
        font-weight: bold;
        color: #1a1a1a;
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
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="profile-card text-center">

            <div class="profile-avatar">🐱</div>
            <div class="profile-username">{{ $username }}</div>
            <div class="profile-badge">Staff Inventory</div>

            <hr style="border-color: #f4a7b9; margin: 25px 0;">

            <div class="text-start">
                <div class="info-item">
                    <label>Username</label>
                    <span>{{ $username }}</span>
                </div>
                <div class="info-item">
                    <label>Role</label>
                    <span>Staff Inventory Management</span>
                </div>
                <div class="info-item">
                    <label>Toko</label>
                    <span>Mofusand Mini Catalogue</span>
                </div>
                <div class="info-item">
                    <label>Tanggal Login</label>
                    <span>{{ now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('dashboard') }}" class="btn-back">← Kembali ke Dashboard</a>
            </div>

        </div>
    </div>
</div>
@endsection
