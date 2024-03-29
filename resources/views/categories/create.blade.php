@extends('layouts.app')
@section('content')
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <div class="form-group">

        <div class="mb-3">
            <label for="category_name" class="form-label">Nombre categoría</label>
            <input class="form-control" type="text" name="category_name" id = "category_name"
                placeholder="Category Name">
        </div>
        <div class="mb-3" >
            <label for="active" class="form-label">Activa</label>
            <input class="form-check-input" type="checkbox" name="active" id = "active" value="1">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </div>
</form>

@endsection