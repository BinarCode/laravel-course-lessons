@extends('layout')

@section('content')

    <div class="flex flex-col">

        <form action="{{ action('SushiController@update', ['sushi' => $sushi->id,])  }}" method="POST"
              class="flex flex-col">
            @csrf
            @method('PUT')

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Name:</label>

                <input type="text" name="name" value="{{ $sushi->name }}">

                <p class="text-red-500"> {{ $errors->first('name')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Price:</label>

                <input type="number" name="price" value="{{ $sushi->price }}" class="border">

                <p class="text-red-500"> {{ $errors->first('price')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Description:</label>
                <textarea name="description" id="" cols="30" rows="10"
                >
                    {{ $sushi->description }}
                </textarea>
            </div>

            <button class="font-semibold bg-gray-300 hover:underline hover:bg-gray-500"> Update</button>

        </form>

    </div>

@endsection
