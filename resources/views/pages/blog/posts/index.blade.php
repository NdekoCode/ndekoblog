@extends('layouts.app',['title'=>"Mon blog"])
@section('content')
<div class="flex flex-col justify-center px-6 py-8 align-center">
    <div class="container flex justify-between mx-auto">
        <div class="w-full lg:w-8/12">
            <div class="flex items-center justify-between">
                <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Post</h1>
                <div>
                    <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option>Latest</option>
                        <option>Last Week</option>
                    </select>
                </div>
            </div>
            @forelse($posts as $post)
            <x-CardPostComponent :post="$post" class="mt-6">
                <div>
                    <a href="#" class="flex items-center">
                        <img src="{{ url($post->user->avatar) }}" width="50" class="rounded-full mr-2">
                        <h1 class="font-bold text-gray-700 hover:underline">{{ $post->user->fullname() }}</h1>
                    </a>
                </div>
            </x-CardPostComponent>

            @empty
            <div class="p-2 my-3 text-blue-700 bg-blue-400 border border-blue-500 rounded">Pas d'article disponible</div>
            @endforelse
        </div>
        <div class="hidden w-4/12 -mx-8 lg:block">
            @include('pages.blog.partials.sidebar')
            <div class="px-8 mt-10">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
                <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-center"><a href="#" class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
                    </div>
                    <div class="mt-4"><a href="#" class="text-lg font-medium text-gray-700 hover:underline">Build
                            Your New Idea with Laravel Freamwork.</a></div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#" class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
