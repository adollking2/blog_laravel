
{{-- reosurce from resources/views/layouts/main --}}
@extends('layouts.main')

{{-- section--}}
@section('container')

  <p>Post </p>
  @foreach ($posts as $post)
  <article class="mb-5">
    {{-- gett all blog --}}

    <h2><a href="http:/post/{{ $post->slug }}">{{ $post->title }}</a></h2>   
    {{-- <h5> by : {{ $post["author"] }}</h5> --}}
    <p>{{ $post->excerpt }}</p>
  
  </article>
  @endforeach  
@endsection