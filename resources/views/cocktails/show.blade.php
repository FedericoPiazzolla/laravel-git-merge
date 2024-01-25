@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="card" style="width: 18rem;">
    <img src="{{$cocktail->image}}" class="card-img-top" alt="{{$cocktail->name}}">
    <div class="card-body">
      <h5 class="card-title">{{$cocktail->name}}</h5>
      <p class="card-text {{ $cocktail->is_alcoholic === 'Alcoholic' ? 'text-success' : 'text-danger' }}">{{$cocktail->is_alcoholic}}</p>
      <p class="card-text">{{$cocktail->instruction}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $cocktail->glass}}</li>
      <li class="list-group-item">{{ $cocktail->slug}}</li>
    </ul>
    {{-- <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div> --}}
  </div>
  
  </div>
@endsection