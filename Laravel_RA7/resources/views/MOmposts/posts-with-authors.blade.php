@extends('layouts.app')

@section('title', 'Publicaciones con Autores')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Publicaciones con Información del Autor</h1>
            <p class="text-muted">Consulta optimizada con carga ansiosa del modelo User.</p>
            <hr>

            @if($posts->count() > 0)
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0">{{ $post->title }}</h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
                                    <div class="alert alert-light mb-0">
                                        <strong>Autor:</strong> {{ $post->user->name }}<br>
                                        <small class="text-muted">{{ $post->user->email }}</small>
                                    </div>
                                </div>
                                <div class="card-footer bg-light">
                                    <small class="text-muted">
                                        Creada: {{ $post->created_at->format('d/m/Y H:i') }}
                                    </small>
                                    @if($post->is_published)
                                        <span class="badge bg-success float-end">Publicada</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info">
                    No hay publicaciones registradas.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
