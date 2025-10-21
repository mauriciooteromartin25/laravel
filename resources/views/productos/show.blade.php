@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h2 class="mb-0">{{ $producto->nombre }}</h2>
    </div>
    <div class="card-body">
        <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
        <p><strong>Precio:</strong> {{ number_format($producto->precio, 2) }} €</p>
        <p><strong>Stock:</strong> {{ $producto->stock }}</p>

        <div class="mt-3">
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                Volver
            </a>
        </div>
    </div>
</div>
@endsection


