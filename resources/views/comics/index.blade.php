@extends('layout.app')

@section('main-content')
<h1 class="text-center">lista comics</h1>
<div class="container">
  <ul class="row">
    @foreach ($comics as $comic)
      <li class="col-4 card">
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
          <h6">{{ $comic->title }}</h6> 
          <img class="w-100" src="{{ $comic->thumb }}">
        </a>
      </li>        
    @endforeach
  </ul>
</div>


<style>
  a {
    text-decoration: none;
    color: black;
  }
  li {
    list-style: none;
  }
</style>

@endsection