@extends("layouts.app")
@section("content")
<table class="table ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Categoría</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->category_name }}</td>
            <td>
                @if ($category->active)
                    Activa
                @else
                    Inactiva
                @endif
            </td>
            <td>
                <a class="btn btn-primary">Editar</a>
                <a class="btn btn-primary">Eliminar</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection