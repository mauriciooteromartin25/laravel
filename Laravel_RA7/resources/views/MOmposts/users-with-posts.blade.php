@extends('layouts.app')

@section('title', 'Usuarios con Publicaciones')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Usuarios que tienen Publicaciones</h1>
            <p class="text-muted">Listado filtrado con whereHas para mostrar solo usuarios con al menos una publicación.</p>
            <hr>

            @if($users->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Número de Publicaciones</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td><strong>{{ $user->name }}</strong></td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <span class="badge bg-primary">{{ $user->posts->count() }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ url('/posts/user/' . $user->id) }}" class="btn btn-sm btn-primary">Ver publicaciones</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info">
                    No hay usuarios con publicaciones.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
