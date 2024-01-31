@extends('layouts.app')


@section('content')
    <div class="container my-5">
        <form action="{{ route('cocktails.update', ['cocktail' => $cocktail->slug])}} " method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $cocktail->name }}" >
            </div>

            <div class="mb-3">
                <label for="glass" class="form-label">Glass</label>
                <input type="text" class="form-control" id="glass" name="glass" value="{{ $cocktail->glass }}">
            </div>

            <div class="mb-3">
                <label for="instruction" class="form-label">Instruction</label>
                <textarea class="form-control" id="instruction" name="instruction" rows="3">{{ $cocktail-> instruction}}</textarea>
            </div>
            <label for="is_alcholic" class="form-label">Is alcholic?</label>
            <select class="form-select" aria-label="Default select example" id="is_alcholic" name="is_alcholic">

                <option selected>seleziona</option>
                <option @selected($cocktail->is_alcholic === 'alcholic') value="alcholic">alcholic</option>
                <option @selected($cocktail->is_alcholic !== 'unalcholic') value="unalcholic">unalcholic</option>

            </select>
            <button type="submit" class="btn btn-success mt-3">salva</button>
        </form>
    </div>
@endsection