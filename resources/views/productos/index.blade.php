@extends('layouts.app')

@section('content')
<h2 class="mb-4 text-center">Listado de Productos MOM</h2>

@if($productos->isEmpty())
    <div class="alert alert-warning text-center">
        No hay productos registrados en la base de datos.
    </div>
@else
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ Str::limit($producto->descripcion, 80) }}</p>
                    <ul class="list-unstyled mb-3">
                        <li><strong>Precio:</strong> {{ number_format($producto->precio, 2) }} €</li>
                        <li><strong>Stock:</strong> {{ $producto->stock }}</li>
                    </ul>
                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-outline-primary btn-sm w-100">
                    Ver Detalles
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif
@endsection



