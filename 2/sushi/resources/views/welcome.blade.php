@extends('layout')

@section('content')

    <header class="major">
        <h2>Sushi list</h2>
    </header>

    <div class="features">
        @foreach($sushies as $sushi)
        <div class="feature">
            <img src="{{ $sushi->image }}" alt="{{ $sushi->name  }}" width="150" height="auto">
            <h3> {{ $sushi->name }} </h3>
            <p> {{ $sushi->price }} (RON)</p>
        </div>
        @endforeach
    </div>
@stop
