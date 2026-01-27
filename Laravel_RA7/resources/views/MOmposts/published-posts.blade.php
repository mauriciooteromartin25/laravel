@extends('layouts.app')

@section('title', 'Publicaciones Publicadas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Publicaciones Publicadas</h1>
            <p class="text-muted">Filtradas por estado de publicación y ordenadas por fecha.</p>
            <hr>

            @if($posts->count() > 0)
                <div class="list-group">
                    @foreach($posts as $post)
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $post->title }}</h5>
                                <small class="text-success">{{ $post->published_at->format('d/m/Y H:i') }}</small>
                            </div>
                            <p class="mb-1">{{ Str::limit($post->content, 200) }}</p>
                            <small class="text-muted">
                                <strong>Autor:</strong> {{ $post->user->name }} ({{ $post->user->email }})
                            </small>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info">
                    No hay publicaciones publicadas.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
