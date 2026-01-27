@extends('layouts.app')

@section('title', 'Todos los Usuarios y sus Publicaciones')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Todos los Usuarios y sus Publicaciones</h1>
            <p class="text-muted">Mostrando usuarios con carga ansiosa (eager loading) para optimizar consultas.</p>
            <hr>

            @forelse($users as $user)
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">{{ $user->name }}</h5>
                        <small>{{ $user->email }}</small>
                    </div>
                    <div class="card-body">
                        @if($user->posts->count() > 0)
                            <h6>Publicaciones ({{ $user->posts->count() }})</h6>
                            <ul class="list-group">
                                @foreach($user->posts as $post)
                                    <li class="list-group-item">
                                        <strong>{{ $post->title }}</strong>
                                        <br>
                                        <small class="text-muted">
                                            Publicado: {{ $post->published_at ? $post->published_at->format('d/m/Y') : 'No publicado' }}
                                        </small>
                                        <br>
                                        <em>{{ Str::limit($post->content, 100) }}</em>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">Este usuario no tiene publicaciones.</p>
                        @endif
                    </div>
                </div>
            @empty
                <div class="alert alert-info">No hay usuarios registrados.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
