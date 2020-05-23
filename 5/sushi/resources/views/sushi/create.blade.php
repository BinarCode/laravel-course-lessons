@extends('layout')

@section('content')

    <div class="flex flex-col">

        <form action="{{ action('SushiController@store')  }}" method="POST"
              class="flex flex-col">
            @csrf

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Name:</label>

                <input type="text" name="name" value="{{ old('name') }}">

                <p class="text-red-500"> {{ $errors->first('name')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Price:</label>

                <input type="number" name="price" value="{{ old('price') }}" class="border">

                <p class="text-red-500"> {{ $errors->first('price')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Description:</label>
                <textarea name="description" id="" cols="30" rows="10" >{{ old('description') }}</textarea>
            </div>

            <button class="font-semibold bg-gray-300 hover:underline hover:bg-gray-500"> Update</button>

        </form>

    </div>

@endsection
