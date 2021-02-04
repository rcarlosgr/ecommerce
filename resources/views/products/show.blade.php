@extends('layouts.app')
@section('title', 'Producto')
@section('content')
    <div class="container-product">
        <div class="content-product">
            <div class="product-header">
                <div class="img">
                    <img src="{{ secure_asset('images/products/'.$product->image) }}" alt="imagen producto">
                </div>
                <div class="info">
                    <h2>{{ $product->name }}</h2>
                    <li>{{ $product->brand }}</li>
                    <h3 class="money">{{ $product->price }}</h3>
                    <div class="add-car">
                        <div class="amount">
                            <button class="btn btn-primary" id="btnRemoveAmount">-</button>
                            <input type="tel" name="" id="inputAmount" value="1">
                            <button class="btn btn-primary" id="btnAddAmount">+</button>
                        </div>
                        <button class="btn-add-car">Agregar al carro</button>
                    </div>
                    <div class="service-items">
                        <div class="service-item">
                            <input type="radio" name="service" id="withService" checked>
                            <label for="withService">Servicio armado <span class="money">30</span></label>
                        </div>
                        <div class="service-item">
                            <input type="radio" name="service" id="noService">
                            <label for="noService">No, gracias</label>
                        </div>
                    </div>
                    <div class="delivery-options">
                        <h3>Opciones de entrega</h3>
                        <li class="delivery-option">
                            <div class="delivery-option-header">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="26" height="26"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M118.25,-0.82692c-0.56851,-0.07753 -1.1887,0.05168 -1.86058,0.20673c-15.86658,3.30769 -42.30228,4.6256 -60.15865,0c-2.63581,0.67188 -4.70312,1.91226 -5.375,4.54808l-5.16827,61.60577l-5.375,-57.67788c0,-2.63581 -3.35937,-4.47055 -5.99519,-2.48077c-9.92308,5.94351 -21.03485,11.78365 -28.32212,15.09135c-4.6256,1.98978 -6.69291,7.36478 -5.375,11.99038l9.92308,40.93269c0.67188,3.30769 3.92788,5.99519 7.23558,5.99519h136.44231c3.30769,0 6.56371,-2.6875 7.23558,-5.99519l9.92308,-40.3125c1.31791,-5.29747 -1.36959,-10.0006 -5.99519,-11.99038c-7.28726,-3.30769 -19.09676,-8.47596 -27.70192,-15.09135c-2.63581,-1.98978 -5.99519,0.05169 -5.99519,2.6875l-5.375,56.23077l-5.16827,-62.22596c0,-1.98978 -1.21454,-3.30769 -2.89423,-3.51442zM5.99519,85.37981c-3.30769,0.67188 -5.99519,3.30769 -5.99519,6.61538v5.16827c0,1.31791 0.56851,2.81671 1.24038,4.13462l5.375,7.85577c7.28726,-6.61538 16.53846,-9.92308 26.46154,-9.92308c21.83594,0 39.69231,17.85637 39.69231,39.69231h26.46154c0,-21.83594 17.85637,-39.69231 39.69231,-39.69231c9.92308,0 19.17428,3.97957 26.46154,9.92308l5.375,-8.68269c0.67188,-1.31791 1.24038,-2.60997 1.24038,-3.92788v-5.16827c0,-3.30769 -2.6875,-5.99519 -5.99519,-5.99519zM33.07692,105.84615c-18.52824,0 -33.07692,14.54868 -33.07692,33.07692c0,18.52824 14.54868,33.07692 33.07692,33.07692c18.52824,0 33.07692,-14.54868 33.07692,-33.07692c0,-18.52824 -14.54868,-33.07692 -33.07692,-33.07692zM138.92308,105.84615c-18.52824,0 -33.07692,14.54868 -33.07692,33.07692c0,18.52824 14.54868,33.07692 33.07692,33.07692c18.52824,0 33.07692,-14.54868 33.07692,-33.07692c0,-18.52824 -14.54868,-33.07692 -33.07692,-33.07692zM33.07692,115.76923c2.01563,0 3.90204,0.3101 5.78846,0.82692l-4.75481,12.61058c-0.36178,-0.05168 -0.67187,-0.20673 -1.03365,-0.20673c-0.59435,0 -1.08533,0.10337 -1.65385,0.20673l-5.16827,-12.19712c2.19651,-0.72356 4.41887,-1.24038 6.82212,-1.24038zM138.92308,115.76923c2.01563,0 3.90204,0.3101 5.78846,0.82692l-4.75481,12.61058c-0.36178,-0.05168 -0.67187,-0.20673 -1.03365,-0.20673c-0.59435,0 -1.08533,0.10337 -1.65385,0.20673l-5.16827,-12.19712c2.19651,-0.72356 4.41887,-1.24038 6.82212,-1.24038zM43.41346,118.45673c3.97957,2.06731 7.46815,5.21996 9.71635,9.09615l-12.19712,5.375c-0.59435,-0.7494 -1.49879,-1.49879 -2.27404,-2.06731zM149.25962,118.45673c3.97957,2.06731 7.46815,5.21996 9.71635,9.09615l-12.19712,5.375c-0.59435,-0.7494 -1.49879,-1.49879 -2.27404,-2.06731zM21.70673,118.87019l5.375,12.19712c-0.69772,0.54267 -1.31791,1.36959 -1.86058,2.06731l-12.61058,-4.54808c2.06731,-3.97956 5.21996,-7.46815 9.09615,-9.71635zM127.55288,118.87019l5.375,12.19712c-0.7494,0.59435 -1.49879,1.4988 -2.06731,2.27404l-12.40385,-4.75481c2.06731,-3.97956 5.21996,-7.46815 9.09615,-9.71635zM54.99038,132.10096c0.72356,2.19651 1.24038,4.41887 1.24038,6.82212c0,2.01563 -0.3101,3.90204 -0.82692,5.78846l-12.61058,-4.75481c0.05169,-0.36178 0.20673,-0.67187 0.20673,-1.03365c0,-0.59435 -0.10337,-1.08533 -0.20673,-1.65385zM160.83654,132.10096c0.72356,2.19651 1.24038,4.41887 1.24038,6.82212c0,2.01563 -0.3101,3.90204 -0.82692,5.78846l-12.61058,-4.75481c0.05169,-0.36178 0.20673,-0.67187 0.20673,-1.03365c0,-0.59435 -0.10337,-1.08533 -0.20673,-1.65385zM10.75,133.13462l12.61058,4.75481c-0.05168,0.36178 -0.20673,0.67188 -0.20673,1.03365c0,0.59435 0.10337,1.08534 0.20673,1.65385l-12.19712,5.16827c-0.72356,-2.19651 -1.24038,-4.41887 -1.24038,-6.82212c0,-2.01562 0.3101,-3.90204 0.82692,-5.78846zM116.59615,133.13462l12.61058,4.75481c-0.05168,0.36178 -0.20673,0.67188 -0.20673,1.03365c0,0.59435 0.10337,1.08534 0.20673,1.65385l-12.19712,5.16827c-0.72356,-2.19651 -1.24038,-4.41887 -1.24038,-6.82212c0,-2.01562 0.3101,-3.90204 0.82692,-5.78846zM146.98558,144.50481l12.40385,4.75481c-2.06731,3.97957 -5.21995,7.46815 -9.09615,9.71635l-5.375,-12.19712c0.7494,-0.59435 1.4988,-1.49879 2.06731,-2.27404zM40.93269,144.71154l12.61058,4.54808c-2.06731,3.97957 -5.21995,7.46815 -9.09615,9.71635l-5.375,-12.19712c0.69772,-0.54267 1.31791,-1.36959 1.86058,-2.06731zM25.22115,144.91827c0.59435,0.7494 1.4988,1.4988 2.27404,2.06731l-4.75481,12.40385c-3.97956,-2.06731 -7.46815,-5.21995 -9.71635,-9.09615zM131.06731,144.91827c0.59435,0.7494 1.4988,1.4988 2.27404,2.06731l-4.75481,12.40385c-3.97956,-2.06731 -7.46815,-5.21995 -9.71635,-9.09615zM32.04327,148.63942c0.36178,0.05169 0.67188,0.20673 1.03365,0.20673c0.59435,0 1.08534,-0.10337 1.65385,-0.20673l5.16827,12.19712c-2.19651,0.72356 -4.41887,1.24038 -6.82212,1.24038c-2.01562,0 -3.90204,-0.3101 -5.78846,-0.82692zM137.88942,148.63942c0.36178,0.05169 0.67188,0.20673 1.03365,0.20673c0.59435,0 1.08534,-0.10337 1.65385,-0.20673l5.16827,12.19712c-2.19651,0.72356 -4.41887,1.24038 -6.82212,1.24038c-2.01562,0 -3.90204,-0.3101 -5.78846,-0.82692z"></path></g></g>
                                </svg>
                            </div>
                            <div class="delivery-option-body">
                                <p class="delivery-option-status">Disponible</p>
                                <p>Despacho a domicilio</p>
                            </div>
                        </li>
                        <li class="delivery-option">
                            <div class="delivery-option-header">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="24" height="24"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M7.16667,0v14.33333h157.66667v-14.33333zM7.16667,21.5c0,0 -7.16667,45.33633 -7.16667,46.58333c0,5.934 4.816,10.75 10.75,10.75c5.934,0 10.75,-4.816 10.75,-10.75v-32.25h16.125v32.25c0,5.934 4.816,10.75 10.75,10.75c5.934,0 10.75,-4.816 10.75,-10.75v-32.25h16.125v32.25c0,5.934 4.816,10.75 10.75,10.75c5.934,0 10.75,-4.816 10.75,-10.75v-32.25h16.125v32.25c0,5.934 4.816,10.75 10.75,10.75c5.934,0 10.75,-4.816 10.75,-10.75l0.06999,-32.25h16.05501v32.25c0,5.934 4.816,10.75 10.75,10.75c5.934,0 10.75,-4.816 10.75,-10.75c0,-1.247 -7.16667,-46.58333 -7.16667,-46.58333zM29.5625,75.264c-3.66933,6.61483 -10.7285,11.09993 -18.8125,11.09993c-1.2255,0 -2.41517,-0.16326 -3.58333,-0.36393v86h93.16667v-71.66667h43v71.66667h21.5v-85.986c-1.16817,0.20067 -2.35783,0.34993 -3.58333,0.34993c-8.084,0 -15.136,-4.47827 -18.8125,-11.08594c-3.66933,6.60767 -10.7285,11.08594 -18.8125,11.08594c-8.084,0 -15.14317,-4.4851 -18.8125,-11.09993c-3.66933,6.61483 -10.7285,11.09993 -18.8125,11.09993c-8.084,0 -15.14317,-4.4851 -18.8125,-11.09993c-3.66933,6.61483 -10.7285,11.09993 -18.8125,11.09993c-8.084,0 -15.14317,-4.4851 -18.8125,-11.09993zM28.66667,100.33333h50.16667v43h-50.16667z"></path></g></g>
                                </svg>
                            </div>
                            <div class="delivery-option-body">
                                <p class="delivery-option-status">Disponible</p>
                                <p>Retiro en tienda</p>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="product-body">
            </div>

        </div>
    </div>
@endsection
