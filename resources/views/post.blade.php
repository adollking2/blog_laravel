
{{-- reosurce from resources/views/layouts/main --}}
@extends('layouts.main')

{{-- section--}}
@section('container')
<h1> {{ $post->title }}</h1>
  <article class="mb-5">
    {{-- gett all blog --}}
    <p>by azzam in <a href="http:/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
  </article>
@endsection