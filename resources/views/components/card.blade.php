<div class="card">
    <div class="card-header">
        <img src="{{ secure_asset( $routeImage ) }}" alt="imagen de producto">
    </div>
    <div class="card-body">
        {{ $name}}
        {{ $marca }}
    </div>
    <div class="card-footer">
        <li class="money">{{ $price }}</li>
    </div>
</div>
