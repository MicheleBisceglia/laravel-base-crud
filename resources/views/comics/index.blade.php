@extends('layout.app');

@section('main-content')
<h1 class="text-center">lista comics</h1>
<ul>
  @foreach ($comics as $item)
    <li>
      <h3>{{ $item->title }}</h3> 
      <p>{{ $item->series }}</p>
      <img src="{{ $item->thumb }}">
      <p>{{ $item->description }}</p>
      <p>{{ $item->type }}</p>
      <p>{{ $item->sale_date }}</p>
      <p>{{ $item->price }} euro</p> 
    </li>        
  @endforeach
</ul>

@endsection