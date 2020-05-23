@extends('layout')

@section('content')

    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
            <img class="h-48 w-full object-cover"
                 src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                 alt=""/>
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
            <div class="flex-1">
                <div class="flex justify-center">
                    <form action="{{ action('SushiController@destroy', ['sushi' => $sushi->id,])  }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button href="{!! action('SushiController@destroy', ['sushi' => $sushi->id,]) !!}"
                                class="hover:underline text-sm">
                            Delete
                        </button>
                    </form>

                    <div>
                        <a href="{!! action('SushiController@edit', ['sushi' => $sushi->id,]) !!}"
                                class="hover:underline mx-4">
                            <button class="text-sm hover:underline mx-4">
                                Edit
                            </button>
                        </a>
                    </div>
                </div>
                <a href="{!! action('SushiController@show', ['sushi' => $sushi->id,]) !!}" class="block">
                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                        {{ $sushi->name }}
                    </h3>
                    <p class="mt-3 text-base leading-6 text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium
                        praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
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

@endsection
