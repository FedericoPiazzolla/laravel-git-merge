@extends('layouts.app')


@section('content')
    <div class="container">
        <form action="{{ route('cocktails.store')}} method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="glass" class="form-label">glass</label>
                <input type="text" class="form-control" id="glass" name="glass">
            </div>

            <div class="mb-3">
                <label for="instruction" class="form-label">instruction</label>
                <textarea class="form-control" id="instruction" name="instruction" rows="3"></textarea>
            </div>
            <label for="is_alcholic" class="form-label"></label>
            <select class="form-select" aria-label="Default select example" id="is_alcholic" name="is_alcholic">
                <option selected>seleziona</option>
                <option value="alcholic">alcholic</option>
                <option value="unalcholic">unalcholic</option>

            </select>
            <button type="submit" class="btn btn-primary">salva</button>
        </form>
    </div>
@endsection
