@extends('layouts.app')

@section('content')
<div class="wrapper">
    <form method="POST" action="{{ route('register') }}" class="card">
        @csrf
        <div >
            <img src="{{ asset('images/upz_logo.png') }}" title="UPZ" class="img-responsive" width="160" height="150">
        </div>
        <div >
            <h1> Registro</h1>
            <div class="input-box">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electrónico">
                <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="input-box">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <input type="submit" class="btn" value="Registrarse" />
            <div>
               <br> 
            </div>
            <div class="register-link">
                    <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
                </div>
            <div>
               <br> 
            </div>
        </div>
    </form>
</div>
@endsection
