@extends('layouts.app')

@section('title', 'Login - Mofusand Shop')

@section('styles')
<style>
    .login-wrapper {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-card {
        background: #ffffff;
        border-radius: 20px;
        border: 2px solid #f4a7b9;
        padding: 40px;
        width: 100%;
        max-width: 420px;
        box-shadow: 0 8px 24px rgba(244, 167, 185, 0.3);
    }
    .login-card h2 {
        color: #1a1a1a;
        font-weight: bold;
        text-align: center;
        margin-bottom: 8px;
    }
    .login-card p {
        color: #888;
        text-align: center;
        margin-bottom: 28px;
        font-size: 0.9rem;
    }
    .form-control {
        border: 2px solid #f4a7b9;
        border-radius: 10px;
        padding: 10px 15px;
    }
    .form-control:focus {
        border-color: #c0392b;
        box-shadow: 0 0 0 0.2rem rgba(192,57,43,0.15);
    }
    .btn-login {
        background-color: #1a1a1a;
        color: #ffffff;
        border-radius: 10px;
        padding: 10px;
        font-weight: bold;
        width: 100%;
        border: none;
        transition: background 0.3s;
    }
    .btn-login:hover {
        background-color: #c0392b;
        color: #ffffff;
    }
</style>
@endsection

@section('content')
<div class="login-wrapper">
    <div class="login-card">
        <h2>Mofusand Mini Catalogue</h2>
        <p>Inventory Management System</p>
        <form action="{{ route('login.proses') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            <button type="submit" class="btn-login mt-2">Masuk →</button>
        </form>
    </div>
</div>
@endsection
