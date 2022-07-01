@extends('layout.app')

@section('main-content')
    <div class="container">
      <h3>{{ $comic->title }}</h3> 
        <p>{{ $comic->series }}</p>
        <img src="{{ $comic->thumb }}">
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->type }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->price }} euro</p> 
    </div>
@endsection