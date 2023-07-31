@extends("layout.default")

@section("content")
    <h1>{{ $post->title }}</h1>
    <img src={{ $post->image }}>
    <p>{{ $post->body }}</p>
@endsection

