<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard MOM - Usuarios y Publicaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        h1 {
            color: #333;
            text-align: center;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        
        h2 {
            color: #4CAF50;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            margin-top: 30px;
        }
        
        ul {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        ul li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        ul li:last-child {
            border-bottom: none;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin: 20px 0;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
        }
        
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {
            background-color: #f9f9f9;
        }
        
        strong {
            color: #333;
        }
        
        small {
            color: #666;
        }
        
        hr {
            border: none;
            border-top: 2px solid #ddd;
            margin: 30px 0;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Dashboard MOM - Sistema de Gestión</h1>
    
    <h2>Estadísticas</h2>
    <ul>
        <li><strong>Total Usuarios:</strong> {{ $users->count() }}</li>
        <li><strong>Total Publicaciones:</strong> {{ $posts->count() }}</li>
        <li><strong>Usuarios Activos:</strong> {{ $users->where('active', true)->count() }}</li>
        <li><strong>Posts Publicados:</strong> {{ $posts->where('is_published', true)->count() }}</li>
    </ul>
    
    <h2>Usuarios Registrados</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Username</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Posts</th>
                <th>Fecha Registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td><strong>{{ $user->name }}</strong></td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ strtoupper($user->role) }}</td>
                <td>{{ $user->active ? 'Activo' : 'Inactivo' }}</td>
                <td><strong>{{ $user->posts->count() }}</strong></td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <h2>Publicaciones</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoría</th>
                <th>Vistas</th>
                <th>Estado</th>
                <th>Fecha Publicación</th>
                <th>Creado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><strong>{{ $post->title }}</strong></td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->category ?? 'Sin categoría' }}</td>
                <td><strong>{{ number_format($post->views) }}</strong></td>
                <td>{{ $post->is_published ? 'Publicado' : 'Borrador' }}</td>
                <td>{{ $post->published_at ? $post->published_at->format('d/m/Y') : '-' }}</td>
                <td>{{ $post->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <hr>
    <footer>
        <p><small>Sistema generado el {{ date('d/m/Y H:i') }} | Base de datos: MySQL</small></p>
    </footer>
</body>
</html>
