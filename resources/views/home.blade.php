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
    <x-card
        routeImage="images/products/51002.webp"
        name="Silla giratoria Nueva Ginebra Negra"
        marca="OEM"
        price="349"
    />

@endsection

