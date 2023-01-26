
{{-- reosurce from resources/views/layouts/main --}}
@extends('layouts.main')

{{-- section--}}
@section('container')

    <h1 class="mb-5"> Post Category: {{ $category }}</h1>
  @foreach ($posts as $post)
  <article class="mb-5">
    {{-- gett all blog --}}

    <h2><a href="http:/post/{{ $post->slug }}">{{ $post->title }}</a></h2>   
    {{-- <h5> by : {{ $post["author"] }}</h5> --}}
    <p>{{ $post->excerpt }}</p>
  
  </article>
  @endforeach  
@endsection