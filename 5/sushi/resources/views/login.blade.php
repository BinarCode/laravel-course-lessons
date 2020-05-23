@extends('layout')

@section('content')

    <div class="flex flex-col">

        <form action="{{ action('AuthController@loginUser')  }}" method="POST"
              class="flex flex-col">
            @csrf

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
                <a href="{{ route('forgotPassword') }}">Forgot password</a>
            </div>




            <button class="font-semibold bg-gray-300 hover:underline hover:bg-gray-500"> Login</button>
        </form>

    </div>

@endsection
