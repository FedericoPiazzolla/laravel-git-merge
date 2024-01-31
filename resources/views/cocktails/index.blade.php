@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="text-end">
            <a class="btn btn-success" href="{{route('cocktails.create')}}">aggiungi un nuovo cocktail +</a>
        </div>
        
        <div class="row row-col-4 gap-3 align-item-center my-5">
            
            @foreach ($cocktails as $cocktail)
                
            <div class="col">

                <div class="card h-100" style="width: 18rem; min-height: 30rem">

                    <img src="{{ $cocktail->image }}" class="card-img-top" alt="">

                    <div class="card-body d-flex flex-column">

                      <h5 class="card-title"><strong>Name: </strong>{{ $cocktail->name }}</h5>
                      <p class="card-text"><strong>Glass: </strong>{{ $cocktail->glass }}</p>

                      <div class="mt-auto card-footer p-0 pt-3">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-success" href="{{ route('cocktails.show',['cocktail'=>$cocktail->slug]) }}">Dettagli</a>
                            <a class=" btn btn-warning"  href="{{ route('cocktails.edit',['cocktail'=>$cocktail->slug]) }}">modifica</a>
                            <form class="d-inline-block" action="{{ route('cocktails.destroy',['cocktail' => $cocktail -> slug ]) }}" method="POST">
                                @csrf
                                @method("DELETE")

                                <button class="btn btn-danger" type="submit">cancella</button>
                            </form>
                        </div>
                      </div>
                      
                      
                    </div>

                </div>

            </div>

            @endforeach
        </div>
        <div> 
            {{$cocktails->links()}}
        </div>
    </div>
@endsection