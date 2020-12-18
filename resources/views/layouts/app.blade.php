<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ secure_asset('images/avatar.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <title>E-commerce - @yield('title')</title>
</head>
<body>
    <div class="container-header">
        <header class="header">
            <div class="logo">
                <a href="">Ferreteria Malvinas</a>
            </div>
            <div class="login-toggle-search">
                <div class="icon-search" id="openSearch">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="24" height="24"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f2f2f2"><path d="M64.5,14.33333c-27.6214,0 -50.16667,22.54527 -50.16667,50.16667c0,27.6214 22.54527,50.16667 50.16667,50.16667c12.52732,0 23.97256,-4.67249 32.7819,-12.31771l3.05143,3.05143v9.26628l43,43l14.33333,-14.33333l-43,-43h-9.26628l-3.05143,-3.05143c7.64521,-8.80934 12.31771,-20.25458 12.31771,-32.7819c0,-27.6214 -22.54527,-50.16667 -50.16667,-50.16667zM64.5,28.66667c19.87509,0 35.83333,15.95824 35.83333,35.83333c0,19.87509 -15.95825,35.83333 -35.83333,35.83333c-19.87509,0 -35.83333,-15.95825 -35.83333,-35.83333c0,-19.87509 15.95824,-35.83333 35.83333,-35.83333z"></path></g></g>
                    </svg>
                </div>
                <div class="login" id="openLogin">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="26" height="26"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f2f2f2"><path d="M13.90265,152.15385c0,0 0,-9.92308 0,-11.24099c0,-14.54867 21.8101,-27.77944 45.63581,-32.43088c0,0 7.28726,-3.95373 5.29747,-11.24099c-7.28726,-9.25121 -9.27704,-19.17428 -9.27704,-19.17428c-1.31791,-0.67187 -3.30769,-1.98978 -4.6256,-3.30769c-1.98978,-2.66165 -4.6256,-10.59495 -3.95372,-16.53846c0.64603,-5.29747 1.96394,-3.30769 2.63581,-4.6256c-5.29747,-11.91287 -2.63581,-27.13342 3.30769,-38.3744c12.5589,-21.83594 39.02044,-15.22055 43,-7.28726c25.14363,-4.6256 24.47176,35.06671 20.51803,44.98978c0,0 1.96394,0.67188 1.96394,9.92308c-0.64604,9.92308 -8.57933,15.86659 -8.57933,15.86659c0,2.66165 -3.30769,10.59495 -8.60517,17.88221c-4.6256,9.2512 4.6256,11.24098 4.6256,11.24098c23.82572,4.6256 45.63582,17.85637 45.63582,32.40505c0,1.31791 0,11.24099 0,11.24099c0,9.27704 -35.71274,19.20012 -68.78967,19.20012c-32.40504,0 -68.78966,-3.30769 -68.78966,-18.52824z"></path></g></g>
                    </svg>
                </div>
                <div class="toggle" id="openMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="24" height="24"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f2f2f2"><path d="M0,14.33333v14.33333h172v-14.33333zM0,78.83333v14.33333h172v-14.33333zM0,143.33333v14.33333h172v-14.33333z"></path></g></g>
                    </svg>
                </div>
            </div>
        </header>
        <div class="header-search" id="containerSearch">
            <div class="icon-close-search" id="closeSearch">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="30" height="30"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M149.06667,143.33333c0,-0.1376 -0.12613,-13.97213 -10.9908,-28.03027c-14.05813,-18.19187 -39.9212,-28.2424 -75.0092,-29.2228v22.85307c0,2.31627 -1.39893,4.41467 -3.53747,5.2976c-2.14427,0.88867 -4.6096,0.3956 -6.24933,-1.24413l-40.13333,-40.13333c-2.24173,-2.24173 -2.24173,-5.8652 0,-8.10693l40.13333,-40.13333c1.63973,-1.63973 4.10507,-2.13853 6.24933,-1.24413c2.13853,0.88293 3.53747,2.98133 3.53747,5.2976v23.02507c94.686,3.0788 97.46667,82.4396 97.46667,91.6416c0,3.17053 -2.56853,5.73333 -5.73333,5.73333c-3.1648,0 -5.73333,-2.5628 -5.73333,-5.73333z"></path></g></g>
                </svg>
            </div>
            <input type="search" name="" id="search" placeholder="¿ Que estas buscando ?">
        </div>
    </div>
    <div class="container-menu" id="menu">
        <div class="content-menu" id="contentMenu">
            <div class="menu-header">
                <img src="{{ secure_asset('images/avatar.jpg') }}" alt="" class="user-avatar">
                <p class="user-name">Carlos Gonzales Ramos</p>
                <p class="user-email">rcarlosgonzales98@gmail.com</p>
            </div>
            <div class="menu-body">
                <nav class="content-menu-body">
                    <ul class="menu">
                        <li class="menu-item">
                            <div class="menu-item-deploy">Registrar
                                <div class="icon-up icon-hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="30" height="30"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M154.8,103.2v11.46667c0,2.21307 -1.27853,4.2312 -3.27947,5.18293c-2.00093,0.95173 -4.3688,0.65933 -6.0888,-0.74533l-59.43173,-48.63013l-59.43747,48.63013c-1.71427,1.40467 -4.08213,1.69133 -6.0888,0.74533c-2.00667,-0.946 -3.27373,-2.96987 -3.27373,-5.18293v-11.46667c0,-1.72 0.774,-3.34827 2.10413,-4.4376l63.06667,-51.6c2.1156,-1.72573 5.14853,-1.72573 7.26413,0l63.06667,51.6c1.3244,1.08933 2.0984,2.7176 2.0984,4.4376z"></path></g></g>
                                    </svg>
                                </div>
                                <div class="icon-down">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="30" height="30"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M17.2,68.8v-11.46667c0,-2.21307 1.27853,-4.2312 3.27947,-5.18293c2.00093,-0.95173 4.3688,-0.65933 6.0888,0.74533l59.43173,48.63013l59.43747,-48.63013c1.71427,-1.40467 4.08213,-1.69133 6.0888,-0.74533c2.00667,0.946 3.27373,2.96987 3.27373,5.18293v11.46667c0,1.72 -0.774,3.34827 -2.10413,4.4376l-63.06667,51.6c-2.1156,1.72573 -5.14853,1.72573 -7.26413,0l-63.06667,-51.6c-1.3244,-1.08933 -2.0984,-2.7176 -2.0984,-4.4376z"></path></g></g>
                                    </svg>
                                </div>
                            </div>
                            <ul class="menu submenu">
                                <li class="menu-item"><a href="#" class="menu-item-link">Usuarios</a></li>
                                <li class="menu-item"><a href="#" class="menu-item-link">Productos</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <div class="menu-item-deploy">Categorias
                                <div class="icon-up icon-hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="30" height="30"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M154.8,103.2v11.46667c0,2.21307 -1.27853,4.2312 -3.27947,5.18293c-2.00093,0.95173 -4.3688,0.65933 -6.0888,-0.74533l-59.43173,-48.63013l-59.43747,48.63013c-1.71427,1.40467 -4.08213,1.69133 -6.0888,0.74533c-2.00667,-0.946 -3.27373,-2.96987 -3.27373,-5.18293v-11.46667c0,-1.72 0.774,-3.34827 2.10413,-4.4376l63.06667,-51.6c2.1156,-1.72573 5.14853,-1.72573 7.26413,0l63.06667,51.6c1.3244,1.08933 2.0984,2.7176 2.0984,4.4376z"></path></g></g>
                                    </svg>
                                </div>
                                <div class="icon-down">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="30" height="30"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M17.2,68.8v-11.46667c0,-2.21307 1.27853,-4.2312 3.27947,-5.18293c2.00093,-0.95173 4.3688,-0.65933 6.0888,0.74533l59.43173,48.63013l59.43747,-48.63013c1.71427,-1.40467 4.08213,-1.69133 6.0888,-0.74533c2.00667,0.946 3.27373,2.96987 3.27373,5.18293v11.46667c0,1.72 -0.774,3.34827 -2.10413,4.4376l-63.06667,51.6c-2.1156,1.72573 -5.14853,1.72573 -7.26413,0l-63.06667,-51.6c-1.3244,-1.08933 -2.0984,-2.7176 -2.0984,-4.4376z"></path></g></g>
                                    </svg>
                                </div>
                            </div>
                            <ul class="menu submenu">
                                <li class="menu-item">
                                    <div class="menu-item-deploy">Baño, cocina y limpieza</div>
                                    <ul class="menu submenu">
                                        <li class="menu-item"><a href="#" class="menu-item-link">Baño</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Termas y calentadores</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Complementos de baño</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Cocina</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Linea blanca</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Utensilios de limpieza</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Productos de limpieza</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Electrodomesticos de cocina</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Menaje</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-item-deploy">Aire libre, jardin y parrillas</div>
                                    <ul class="menu submenu">
                                        <li class="menu-item"><a href="#" class="menu-item-link">Terraza</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Parrilla</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Camping</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Juegos infantiles</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Piscinas, sopa e inflables</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Deportes</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Jardin</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Marcotas</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <div class="menu-item-deploy">Automovil</div>
                                    <ul class="menu submenu">
                                        <li class="menu-item"><a href="#" class="menu-item-link">Llantas y aros</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Baterias para autos y accesorios</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Audio y video para auto</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Limpieza para autos</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-item-deploy">Construccion y ferreteria</div>
                                    <ul class="menu submenu">
                                        <li class="menu-item"><a href="#" class="menu-item-link">Materia de construccion</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Fijaciones y adhesivos</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Pinturas seguridad</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Gasfiteria</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Chapas para puestas y cerraduras</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Electricidad</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Herramientas para construccion</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-item-deploy">Decoracion, menaje e iluminacion</div>
                                    <ul class="menu submenu">
                                        <li class="menu-item"><a href="#" class="menu-item-link">Cortinas y persianas</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Ropa de cama</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Alfombras y cubrepisos</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Decoracio</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">iluminacion y ventiladores de techo</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">iluminacion comercial y exterior</a></li>
                                        <li class="menu-item"><a href="#" class="menu-item-link">Menaje</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <div class="menu-item-deploy">Servicio hogar
                                <div class="icon-up icon-hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="30" height="30"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M154.8,103.2v11.46667c0,2.21307 -1.27853,4.2312 -3.27947,5.18293c-2.00093,0.95173 -4.3688,0.65933 -6.0888,-0.74533l-59.43173,-48.63013l-59.43747,48.63013c-1.71427,1.40467 -4.08213,1.69133 -6.0888,0.74533c-2.00667,-0.946 -3.27373,-2.96987 -3.27373,-5.18293v-11.46667c0,-1.72 0.774,-3.34827 2.10413,-4.4376l63.06667,-51.6c2.1156,-1.72573 5.14853,-1.72573 7.26413,0l63.06667,51.6c1.3244,1.08933 2.0984,2.7176 2.0984,4.4376z"></path></g></g>
                                    </svg>
                                </div>
                                <div class="icon-down">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="30" height="30"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M17.2,68.8v-11.46667c0,-2.21307 1.27853,-4.2312 3.27947,-5.18293c2.00093,-0.95173 4.3688,-0.65933 6.0888,0.74533l59.43173,48.63013l59.43747,-48.63013c1.71427,-1.40467 4.08213,-1.69133 6.0888,-0.74533c2.00667,0.946 3.27373,2.96987 3.27373,5.18293v11.46667c0,1.72 -0.774,3.34827 -2.10413,4.4376l-63.06667,51.6c-2.1156,1.72573 -5.14853,1.72573 -7.26413,0l-63.06667,-51.6c-1.3244,-1.08933 -2.0984,-2.7176 -2.0984,-4.4376z"></path></g></g>
                                    </svg>
                                </div>
                            </div>
                            <ul class="menu submenu">
                                <li class="menu-item">
                                    <div class="menu-item-deploy">Baños</div>
                                    <ul class="menu submenu">
                                        <li class="menu-item"><a href="" class="menu-item-link">Porcelanatos</a></li>
                                        <li class="menu-item"><a href="" class="menu-item-link">Ceramicos</a></li>
                                        <li class="menu-item"><a href="" class="menu-item-link">Vinilos</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-item-deploy">Cocinas</div>
                                    <ul class="menu submenu">
                                        <li class="menu-item"><a href="" class="menu-item-link">Porcelanatos</a></li>
                                        <li class="menu-item"><a href="" class="menu-item-link">Ceramicos</a></li>
                                        <li class="menu-item"><a href="" class="menu-item-link">Vinilos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="menu-footer">
                <li><a href="">¿ Quienes somos ?</a></li>
                <li><a href=""> Cerrar sesion </a></li>
            </div>
        </div>
    </div>
    <div class="container-main">
        @yield('content')
    </div>
    <div class="container-modal-login" id="modalLogin">
        <div class="content-modal-login">
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
    <script src="{{ secure_asset('js/app.js') }}"></script>
</body>
</html>
