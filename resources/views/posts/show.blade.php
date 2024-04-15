@extends('layouts.app')
@section('content')

<table class="table ">
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
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->category_id }}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" 
                    style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection


