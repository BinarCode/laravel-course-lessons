@extends('layout')

@section('content')

    <div class="flex flex-col">

        <form action="{{ action('AuthController@registerUser')  }}" method="POST"
              class="flex flex-col">
            @csrf

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">First Name:</label>

                <input type="text" name="first_name" value="{{ old('first_name') }}">

                <p class="text-red-500"> {{ $errors->first('first_name')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Last Name:</label>

                <input type="text" name="last_name" value="{{ old('last_name') }}">

                <p class="text-red-500"> {{ $errors->first('last_name')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Email:</label>

                <input type="text" name="email" value="{{ old('email') }}">

                <p class="text-red-500"> {{ $errors->first('email')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Password:</label>

                <input type="password" name="password" value="{{ old('password') }}" class="border">

                <p class="text-red-500"> {{ $errors->first('password')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Confirm Password:</label>

                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="border">

                <p class="text-red-500"> {{ $errors->first('password_confirmation')  }} </p>
            </div>

            <button class="font-semibold bg-gray-300 hover:underline hover:bg-gray-500"> Register</button>
        </form>

    </div>

@endsection
