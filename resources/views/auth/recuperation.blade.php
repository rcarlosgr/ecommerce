@extends('layouts.app')
@section('title', 'Recuperacion')
@section('content')
    <div class="container-recuperation">
        <div class="content-recuperation">
            <h2  class="recuperation-title">Recuperar contraseña</h2>
            <form action="" class="form">
                <div class="form-item">
                    <label for="">Correo electronico:</label>
                    <input type="email" name="" id="" placeholder="Correo electronico">
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary">Recuperar contraseña</button>
                </div>
            </form>
            <div class="message-error">Correo no registrado</div>
            <li>¿ No tienes una cuenta ? <a href="{{ secure_url('registro') }}">Registrate</a></li>
            <li>¿ Ya tienes cuenta ? <a href="{{ secure_url('ingresar') }}">Iniciar sesion</a></li>
        </div>
    </div>
@endsection
