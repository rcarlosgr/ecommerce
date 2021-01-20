<div class="card">
    <a href="{{ secure_url('productos', [$id]) }}" class="card-header">
        <img src="{{ secure_url('images/products/'.$image) }}" alt="imagen de producto">
    </a>
    <div class="card-body">
        <li> {{ $name }} </li>
        <li> {{ $brand }} </li>
        <li class="money">{{ $price }}</li>
    </div>
    <div class="card-footer">
        <button class="btn-add-car">Agregar al carrito</button>
    </div>
</div>
