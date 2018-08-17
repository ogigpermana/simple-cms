@extends('layouts.main')
@section('content')
@include('layouts.navbar')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Daftar
          <small>Artikel Terbaru</small>
        </h1>

        <!-- Blog Post -->
        @forelse($posts as $post)
        <div class="card mb-4">
          @if($post->image)
          <img class="card-img-top" src="{{ $post->image_url }}" alt="Card image cap">
          @endif
          <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="show.html" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $post->created_at }} by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
        @empty
        <p>Anda tidak memiliki artikel yang bisa ditampilkan</p>
        @endforelse

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
@include('layouts.sidebar')

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection