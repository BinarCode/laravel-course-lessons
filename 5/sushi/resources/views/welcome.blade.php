@extends('layout')

@section('content')

    @auth
    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{!! action('SushiController@create') !!}">
        Create Sushi
    </a>
    @endauth

    <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Sushi list
                </h2>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($sushies as $sushi)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover"
                                 src="{!! $sushi->image !!}"
                                 alt=""/>
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-indigo-600">
                                    @auth
                                    <a href="{!! action('SushiController@edit', ['sushi' => $sushi->id,]) !!}" class="hover:underline">
                                        Edit
                                    </a>
                                        @endauth
                                </p>
                                <a href="{!! action('SushiController@show', ['sushi' => $sushi->id,]) !!}" class="block">
                                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                                        {{ $sushi->name }}
                                    </h3>
                                    <p class="mt-3 text-base leading-6 text-gray-500">
                                        {!! $sushi->description !!}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#">
                                        <img class="h-10 w-10 rounded-full" src="{!! $sushi->image !!}" alt=""/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium text-gray-900">
                                        <a href="#" class="hover:underline">
                                            Eduard Lupacescu
                                        </a>
                                    </p>
                                    <div class="flex text-sm leading-5 text-gray-500">
                                        <time datetime="2020-03-16">
                                            {!! $sushi->created_at !!}
                                        </time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@stop
