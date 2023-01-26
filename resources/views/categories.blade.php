
{{-- reosurce from resources/views/layouts/main --}}
@extends('layouts.main')

{{-- section--}}
@section('container')

  <p> Category </p>
  @foreach ($categories as $category)
    <ul>
        <li>
            <h2><a href="http:/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>   
        </li>
    </ul>

  @endforeach  
@endsection