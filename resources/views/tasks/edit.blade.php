@extends('layouts.app')

@section('content')
<h1>Editar tarea</h1>

<form method="POST" action="{{ route('tasks.update', $task) }}">
    @csrf
    @method('PUT')

    <label>Título</label>
    <input type="text" name="title" value="{{ $task->title }}">

    <label>Descripción</label>
    <textarea name="description">{{ $task->description }}</textarea>

    <label>
        <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }}>
        Tarea completada
    </label>

    <br><br>

    <button class="btn-primary">Actualizar</button>
    <a href="{{ route('tasks.index') }}" class="btn-secondary">Volver</a>
</form>
@endsection
