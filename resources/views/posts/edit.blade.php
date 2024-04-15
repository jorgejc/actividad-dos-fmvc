@extends("layouts.app")
@section("content")
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $post->id }}">
    <div class="form-group
        @error('title')
            has-error
        @enderror">
        <label for="title">Título del post</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
        @error('title')
        <span class="help-block">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group
    @error('content')
        has-error
    @enderror">
    <label for="content">content del post</label>
    <input type="text" name="content" id="content" class="form-control" value="{{ $post->content }}">
    @error('content')
    <span class="help-block">{{ $message }}</span>
    @enderror
    </div>

    <div class="form-group">
        <label for="category_id">Categoría:</label>
        <select name="category_id" id="category" class="form-control">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" 
                @if ($category->id == $post->category->id) selected @endif>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection