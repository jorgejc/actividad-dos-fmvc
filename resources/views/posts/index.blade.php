@extends('layouts.app')
@section('content')
<div class="container">

    <h5>Lista de publicaciones</h5>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear publicación</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Contenido</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->category->category_name }}</td> 
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Editar</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
</div>
@endsection