@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cocktails as $cocktail)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$cocktail->name}}</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <form action="{{route('restore', ['id' => $cocktail->id]) }}">
                                <button type="submit">ripristino</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
