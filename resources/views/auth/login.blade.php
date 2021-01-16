@extends('layouts.app')
@section('title', 'Ingresar')
@section('content')
    <div class="container-login">
        <div class="content-login" id="contentLogin">
            <x-login idBtn="btnLogin" idMessage="messageLogin"/>
        </div>
    </div>
@endsection
