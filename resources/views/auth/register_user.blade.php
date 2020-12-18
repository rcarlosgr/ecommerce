@extends('layouts.app')
@section('title', 'Registro')
@section('content')
    <div class="container-register">
        <div class="content-register">
            <h2  class="register-title">Registro de Usuarios</h2>
            <form action="" class="form">
                <div class="form-item">
                    <label for="">Nombres:</label>
                    <input type="text" name="" id="" placeholder="Nombres">
                </div>
                <div class="form-item">
                    <label for="">Apellidos:</label>
                    <input type="text" name="" id="" placeholder="Apellidos">
                </div>
                <div class="form-item">
                    <label for="">Dni:</label>
                    <input type="text" name="" id="" placeholder="Dni">
                </div>
                <div class="form-item">
                    <label for="">Correo electronico:</label>
                    <input type="email" name="" id="" placeholder="Correo electronico">
                </div>
                <div class="form-item">
                    <label for="">Contraseña:</label>
                    <input type="password" name="" id="" placeholder="Contraseña">
                </div>
                <div class="form-item">
                    <label for="">Repetir contraseña:</label>
                    <input type="password" name="" id="" placeholder="Repetir contraseña">
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary">Registrarse</button>
                </div>
            </form>
            <div class="message-error">Usuario o contraseña incorrectos</div>
            <li>¿ Ya tienes cuenta ? <a href="{{ secure_url('ingresar') }}">Iniciar sesion</a></li>
        </div>
    </div>
@endsection
