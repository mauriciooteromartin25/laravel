@extends('layouts.app')

@section('title', 'Publicaciones del Usuario')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('/posts/all') }}" class="btn btn-secondary mb-3">← Volver</a>
            
            <h1>{{ $user->name }}</h1>
            <p class="text-muted">{{ $user->email }}</p>
            <hr>

            @if($user->posts->count() > 0)
                <h3>Publicaciones ({{ $user->posts->count() }})</h3>
                <div class="row">
                    @foreach($user->posts as $post)
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->content }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">
                                            Publicada: {{ $post->published_at ? $post->published_at->format('d/m/Y H:i') : 'Borrador' }}
                                        </small>
                                        @if($post->is_published)
                                            <span class="badge bg-success">Publicada</span>
                                        @else
                                            <span class="badge bg-warning">Borrador</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info">
                    <strong>{{ $user->name }}</strong> no tiene publicaciones aún.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
