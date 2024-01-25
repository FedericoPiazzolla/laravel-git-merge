@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row row-col-4 gap-3 align-item-center">
            @foreach ($cocktails as $cocktail)
                
            <div class="col">

                <div class="card" style="width: 18rem; min-height: 30rem">
                    <img src="{{ $cocktail->image }}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title"><strong>Name: </strong>{{ $cocktail->name }}</h5>
                      <p class="card-text"><strong>Glass: </strong>{{ $cocktail->glass }}</p>
                      <a class="btn btn-success" href="{{ route('cocktails.show',['cocktail'=>$cocktail->slug]) }}">Dettagli</a>
                    </div>
                 
                  </div>

            </div>

            @endforeach
        </div>
    </div>
@endsection