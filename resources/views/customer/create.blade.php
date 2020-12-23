@extends('layouts.app')
@section('title', 'Registro')
@section('content')
    <div class="container-register">
        <div class="content-register">
            <h2  class="register-title">Registro</h2>
            <form action="/customer/store" method="POST" class="form" id="formRegisterCustomer" autocomplete="off">
                @csrf
                <div class="form-item">
                    <label for="">Nombres:</label>
                    <input type="text" name="name" id="name" placeholder="Nombres" required>
                    <div id="messageName"></div>
                </div>
                <div class="form-item">
                    <label for="">Apellidos:</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Apellidos">
                    <div id="messageLastname"></div>
                </div>
                <div class="form-item">
                    <label for="">Dni:</label>
                    <input type="text" name="dni" id="dni" placeholder="Dni">
                    <div id="messageDni"></div>
                </div>
                <div class="form-item">
                    <label for="">Contraseña:</label>
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <div id="messagePassword"></div>
                </div>
                <div class="form-item">
                    <label for="">Repetir contraseña:</label>
                    <input type="password" name="passwordConfirmation" id="passwordConfirmation" placeholder="Repetir contraseña">
                </div>
                <div class="form-btns">
                    <button type="submit" class="btn btn-primary" id="btnRegister">Registrarse</button>
                </div>
            </form>
            <div id="messageForm"></div>
            <li>¿ Ya tienes cuenta ? <a href="{{ secure_url('ingresar') }}">Iniciar sesion</a></li>
        </div>
    </div>
@endsection
