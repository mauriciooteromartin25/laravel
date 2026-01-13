@extends('layouts.app')

@section('content')
<h1>Lista de tareas</h1>

<a href="{{ route('tasks.create') }}" class="btn-primary">+ Nueva tarea</a>

<ul class="task-list">
@foreach($tasks as $task)
    <li class="task-item">
        <div>
            <strong class="{{ $task->completed ? 'task-completed' : '' }}">
                {{ $task->title }}
            </strong><br>

            <small>
                Estado:
                <span class="{{ $task->completed ? 'status-done' : 'status-pending' }}">
                    {{ $task->completed ? 'Completada' : 'Pendiente' }}
                </span>
            </small><br>

            <small>
                Creada el: {{ $task->created_at->format('d/m/Y H:i') }}
            </small>
        </div>

        <div>
            <a href="{{ route('tasks.edit', $task) }}" class="btn-secondary">Editar</a>

            <form method="POST" action="{{ route('tasks.destroy', $task) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn-danger">Eliminar</button>
            </form>
        </div>
    </li>
@endforeach
</ul>
@endsection
