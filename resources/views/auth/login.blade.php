@extends('layouts.app')
@section('title', 'Ingresar')
@section('content')
    <div class="container-login">
        <div class="content-login" id="contentLogin">
            <h2  class="login-title">Iniciar sesion</h2>
            <form method="POST" class="form" autocomplete="off" id="formLogin">
                @csrf
                <div class="form-item">
                    <label for="">Dni:</label>
                    <input type="text" name="dni" id="dni" placeholder="Dni">
                    <div id="messageDni"></div>
                </div>
                <div class="form-item">
                    <label for="">Cotraseña:</label>
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                </div>
                <div class="form-btns">
                    <button type="submit" class="btn btn-primary" id="btnRegister">Ingresar</button>
                </div>
            </form>
            <div class="container-alert">
                <div id="messageLogin"></div>
            </div>
            <li>¿ No tienes una cuenta ? <a href="{{ secure_url('registro') }}">Registrate</a></li>
            <li><a href="{{ secure_url('recuperacion') }}">¿ Olvidaste tu contraseña ?</a></li>
        </div>
    </div>
@endsection
