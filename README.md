@extends('layouts.app')
 
@section('content')
<div class="wrapper">
    <form method="POST" action="{{ route('login') }}" class="card">
        @csrf
        <div >
            <img src="{{ asset('images/upz_logo.png') }}" title="UPZ" class="img-responsive" width="160" height="150">
        </div>
        <div >
            <h1> Iniciar Sesión</h1>
            <div class="input-box">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <input type="submit" class="btn" value="Iniciar Sesión" />
            
            @if (Route::has('register'))
                <div class="register-link">
                    <p>¿No estás registrado? <a href="{{ route('register') }}">Registrarse</a></p>
                </div>
            @endif
        </div>
    </form>
</div>
@endsection
