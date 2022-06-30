@extends('layouts.app')
@section('content')
    <div>

        <div class="mx-auto mb-10 max-w-7xl bg-white px-10 py-6">
            {{-- Avec created_at on a une instance de carbone --}}
            <div class="flex items-center justify-between">
                <span class="font-light text-gray-600">
                    {{ $post->created_at->format('M d, Y') }}
                </span>
                <a href="#"
                    class="rounded bg-gray-600 px-2 py-1 font-bold text-gray-100 hover:bg-gray-500">{{ $post->category->name }}
                </a>
            </div>
            <div class="mt-2">
                <h2 class="mb-5 text-2xl font-bold text-gray-700">{{ $post->title }}
                </h2>
                <p><img src="{{ url("/storage/$post->image") }}" alt="{{ $post->title }}"></p>
                <div class="mt-10">
                    {{ $post->content }}
                </div>
            </div>
            <div class="mt-4">

                <div>
                    <a href="#" class="flex items-center justify-end">
                        <img src="{{ url($post->user->avatar) }}" width="50" class="mr-2 rounded-full">
                        <h1 class="font-bold text-gray-700 hover:underline">{{ $post->user->fullname() }}</h1>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
