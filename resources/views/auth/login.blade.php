@extends('layouts.app')
@section('title', 'Ingresar')
@section('content')
    <div class="container-login">
        <div class="content-login" id="contentLogin">
            <h2  class="login-title">Iniciar sesion</h2>
            <form action="" class="form">
                <div class="form-item">
                    <label for="">Dni:</label>
                    <input type="text" name="" id="" placeholder="Dni">
                </div>
                <div class="form-item">
                    <label for="">Cotraseña:</label>
                    <input type="password" name="" id="" placeholder="Contraseña">
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary">Ingresar</button>
                </div>
            </form>
            <div class="message-error">Usuario o contraseña incorrectos</div>
            <li>¿ No tienes una cuenta ? <a href="{{ secure_url('registro') }}">Registrate</a></li>
            <li><a href="{{ secure_url('recuperacion') }}">¿ Olvidaste tu contraseña ?</a></li>
        </div>
    </div>
@endsection
