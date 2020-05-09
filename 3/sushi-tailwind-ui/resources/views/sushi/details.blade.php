@extends('layout')

@section('header')
    <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-10 xl:mt-20">
        <div class="text-center">
            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                {{$sushi->name}}
                <br class="xl:hidden"/>
            </h2>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                {{$sushi->description}}
            </p>
            <div class="mt-3 max-w-md mx-auto flex flex-col sm:flex-row sm:justify-center md:mt-5">
                <form action="{{action('SushiController@destroy', [$sushi->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="rounded-md shadow sm:mr-2 mb-2">
                        <button type="submit"
                                class="w-full flex items-center justify-center px-8 py-3 border border-red-500 text-base leading-6 font-medium rounded-md text-red-500 bg-white hover:bg-red-500 hover:text-white focus:outline-none focus:shadow-outline-red transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Delete this Sushi
                        </button>
                    </div>
                </form>
                <div class="rounded-md shadow mb-2">
                    <a href="/sushi/{{$sushi->id}}/edit"
                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-green transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Edit this Sushi
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="relative -pt-20 pb-12 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
        <div class="mt-12 max-w-lg mx-auto">
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ $sushi->image }}" alt="{{ $sushi->name  }}"/>
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <div class="font-semibold leading-5">
                            {{$sushi->price}} RON
                        </div>
                        <a href="{{url('/sushi/' . $sushi->id)}}" class="block">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                {{ $sushi->name }}
                            </h3>
                            <p class="mt-3 text-base leading-6 text-gray-500">
                                {{ $sushi->description }}
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
