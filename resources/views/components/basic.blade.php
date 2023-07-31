<div class="col">
    <div class="card shadow-sm">
      <h1>{{ $post->title }}</h1>
      <img src={{ $post->image }}>
      <div class="card-body">
        <p class="card-text">{{ $post->body }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="/posts{{ $post->id }}">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

