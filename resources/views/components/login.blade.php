<h2 class="login-title">Iniciar sesion</h2>
<form method="POST" class="form" autocomplete="off">
    @csrf
    <div class="form-item">
        <label for="">Dni:</label>
        <input type="text" name="dni" placeholder="Dni">
    </div>
    <div class="form-item">
        <label for="">Cotraseña:</label>
        <input type="password" name="password" placeholder="Contraseña">
    </div>
    <div class="form-btns">
        <button type="submit" class="btn btn-primary" id="{{ $idBtn }}">Ingresar</button>
        <div class="loader" id="loader">... cargando</div>
    </div>
</form>
<div class="container-alert">
    <div id="{{ $idMessage }}"></div>
</div>
<li>¿ No tienes una cuenta ? <a href="{{ secure_url('registro') }}">Registrate</a></li>
<li><a href="{{ secure_url('recuperacion') }}">¿ Olvidaste tu contraseña ?</a></li>
