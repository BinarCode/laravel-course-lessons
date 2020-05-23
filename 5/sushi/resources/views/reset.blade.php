@extends('layout')

@section('content')

    <div class="flex flex-col">

        <form action="{{ action('AuthController@resetPassword') }}" method="POST"
              class="flex flex-col">
            @csrf

            <input type="hidden" name="reset_token" value="{{ $token }}">

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">New Password:</label>

                <input type="password" name="password" value="{{ old('password') }}" class="border">

                <p class="text-red-500"> {{ $errors->first('password')  }} </p>
            </div>

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Confirmation Password:</label>

                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="border">

                <p class="text-red-500"> {{ $errors->first('password_confirmation')  }} </p>
            </div>

            <button class="font-semibold bg-gray-300 hover:underline hover:bg-gray-500"> Reset password</button>
        </form>

    </div>

@endsection
