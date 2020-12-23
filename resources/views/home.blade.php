@extends('layouts.app')
@section('title', "inicio")

@section('content')
    @if (session('dni'))
        <h2>
            Hola {{ ucwords(session('name')) }} {{ ucwords(session('lastname')) }}, Bienvenid@.
        </h2>
    @endif
    <p>Esto sera un sistema eccomerce.
        Estamos trabajando en ello...</p>

    <a href="{{ secure_url('ingresar') }}">Iniciar sesion</a>

@endsection

