
{{-- reosurce from resources/views/layouts/main --}}
@extends('layouts.main')

{{-- section--}}
@section('container')
<h1> {{ $title }}</h1>
  <article class="mb-5">
    {{-- gett all blog --}}
    {!! $post->body !!}
  </article>
@endsection