@extends('layouts.app')

@section('content')
<h1>Nueva tarea</h1>

@if($errors->any())
<div class="alert-error">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('tasks.store') }}" class="form">
    @csrf

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea id="description" name="description" rows="4"></textarea>
    </div>

    <div class="form-actions">
        <button class="btn-primary">Guardar</button>
        <a href="{{ route('tasks.index') }}" class="btn-secondary">Volver</a>
    </div>
</form>
@endsection
