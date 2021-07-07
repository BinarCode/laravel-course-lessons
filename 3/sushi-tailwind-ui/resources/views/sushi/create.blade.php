@extends('layout')

@section('content')

    <div class="bg-gray-50 pb-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:pb-24">
        <div class="relative max-w-xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Create new Sushi
                </h2>
            </div>
            <div class="mt-12">
                <form action="{{action('SushiController@store')}}" method="POST" class="grid grid-cols-1 row-gap-6 sm:grid-cols-2 sm:col-gap-8">
                    @csrf
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="name" name="name" class="form-input py-3 px-4 block w-full transition ease-in-out duration-150" />
                        </div>
                        <span class="text-sm text-red-500">{{$errors->first('name')}}</span>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="price" class="block text-sm font-medium leading-5 text-gray-700">Price</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="price" name="price" type="number" class="form-input py-3 px-4 block w-full transition ease-in-out duration-150" />
                        </div>
                        <span class="text-sm text-red-500">{{$errors->first('price')}}</span>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="image" class="block text-sm font-medium leading-5 text-gray-700">Image</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="image" name="image" type="url" class="form-input py-3 px-4 block w-full transition ease-in-out duration-150" />
                        </div>
                        <span class="text-sm text-red-500">{{$errors->first('image')}}</span>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block text-sm font-medium leading-5 text-gray-700">Description</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea id="description" name="description" rows="4" class="form-textarea py-3 px-4 block w-full transition ease-in-out duration-150"></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                      <span class="w-full inline-flex rounded-md shadow-sm">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150">
                          Add my Sushi
                        </button>
                      </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
