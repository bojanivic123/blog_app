@extends("layout.default")

@section("content")
    <form method="POST" action={{ url("createpost") }}>
        @csrf
        <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" required><br>
        <label for="body">Body</label><br>
        <textarea type="text" name="body" required></textarea><br>
        <label for="image">Image</label><br>
        <input type="url" name="image" required><br>
        <button type="submit">Create Post</button>
    </div>
    </form>

@include("components.errors")
@include("components.status")

@endsection

