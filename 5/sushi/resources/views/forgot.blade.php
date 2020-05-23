@extends('layout')

@section('content')

    <div class="flex flex-col">

        <form action="{{ action('AuthController@forgotPassword')  }}" method="POST"
              class="flex flex-col">
            @csrf

            <div class="flex flex-col my-4 items-start">
                <label for="" class="font-semibold">Email:</label>

                <input type="text" name="email" value="{{ old('email') }}">

                <p class="text-red-500"> {{ $errors->first('email')  }} </p>
            </div>

            <div class="text-green-500">
                {{ session('status')  }}
            </div>

            <button class="font-semibold bg-gray-300 hover:underline hover:bg-gray-500"> Send reset password</button>
        </form>

    </div>

@endsection
