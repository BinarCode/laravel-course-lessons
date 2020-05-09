@extends('layout')

@section('header')
    <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-10 xl:mt-20">
        <div class="text-center">
            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                Fresh Sushi
                <br class="xl:hidden"/>
                <span class="text-green-600">near You</span>
            </h2>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Find the best quality sushi near you. Browse & order various flavours of sushi.
                <br>
                Pre-order or share your favorite sushi with others in seconds!
            </p>
            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div class="rounded-md shadow">
                    <a href="#sushi-list"
                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-green transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-12 lg:pb-32 lg:px-8">
        <div class="relative max-w-7xl mx-auto">
            <div id="sushi-list" class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($sushi as $sushiItem)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ $sushiItem->image }}"
                                 alt="{{ $sushiItem->name  }}"/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <div class="font-semibold leading-5">
                                    {{$sushiItem->price}} RON
                                </div>
                                <a href="{{url('/sushi/' . $sushiItem->id)}}" class="block">
                                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                        {{ $sushiItem->name }}
                                    </h3>
                                    <p class="mt-3 text-base leading-6 text-gray-500">
                                        {{$sushiItem->description}}
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
