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
                    <input type="text" name="name" id="" placeholder="Nombres" value="{{ old('name') }}">
                    @error('name')
                        <div class="message-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="">Apellidos:</label>
                    <input type="text" name="lastname" id="" placeholder="Apellidos" value="{{ old('lastname') }}">
                    @error('lastname')
                        <div class="message-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="">Dni:</label>
                    <input type="text" name="dni" id="" placeholder="Dni" value="{{ old('dni') }}">
                    @error('dni')
                        <div class="message-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="">Contraseña:</label>
                    <input type="password" name="password" id="" placeholder="Contraseña">
                    @error('password')
                        <div class="message-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="">Repetir contraseña:</label>
                    <input type="password" name="password_confirmation" id="" placeholder="Repetir contraseña">
                    @error('repearPassword')
                        <div class="message-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-btns">
                    <button type="submit" class="btn btn-primary" id="btnRegister">Registrarse</button>
                </div>
            </form>
            <li>¿ Ya tienes cuenta ? <a href="{{ secure_url('ingresar') }}">Iniciar sesion</a></li>
        </div>
    </div>
@endsection
