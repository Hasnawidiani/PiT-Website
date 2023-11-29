@extends('layouts.auth')

@php
$title = 'Login'
@endphp

@section('container-user')
@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: '{{session("error")}}',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif

<div class="title-text">
    <div class="title login">Form Login</div>
    <div class="title signup">Form Registrasi</div>
</div>
<div class="form-container">
    <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Daftar</label>
        <div class="slider-tab"></div>
    </div>
    <div class="form-inner">
        <form action="{{route('login')}}" method="POST" class="login">
            @csrf
            <pre>
            </pre>
            <div class="field">
                <input type="email" name="email" placeholder="Masukan Email " required>
            </div>
            <div class="field">
                <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="pass-link"><a href="#">Lupa password?</a></div>
            <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
        </form>


        <form action="{{route('register')}}" method="POST" class="signup">
            @csrf
            <div class="field">
                <input type="text" name="name" placeholder="Masukan Nama" required>
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="Masukan Email" required>
            </div>
            <div class="field">
                <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="field">
                <input type="password" name="password_confirmation" placeholder="Ulangi password" required>
            </div>
            <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Daftar">
            </div>
            <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
        </form>
    </div>
</div>
@endsection