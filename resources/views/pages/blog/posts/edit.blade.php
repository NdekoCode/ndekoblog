@extends('layouts.app', ['title' => "Modifier l'article " . $post->title])
@section('content')
    <h1 class="heading m-5 text-center text-2xl font-bold text-gray-800">New Post</h1>
    <form method="POST" action="{{ route('posts.update') }}" enctype="multipart/form-data"
        class="editor mx-auto flex w-10/12 max-w-2xl flex-col border border-gray-300 p-4 text-gray-800 shadow-lg">
        @csrf
        @method('PUT')
        <div class="mb-3 w-full">
            <x-label for="title" class="mb-3 text-base" value="Titre du posts"></x-label>
            <x-input
                class="title {{ $errors->has('title') ? 'border-red-500' : '' }} mb-1 w-full border border-gray-300 bg-gray-100 p-2 outline-none"
                placeholder="Title" type="text" value="{{ old('title') ?? $post->title }}" id="title"
                name="title"></x-input>
            @if ($errors->has('title'))
                <p class="text-xs italic text-red-500">{{ $errors->first('title') }}</p>
            @endif
        </div>
        <div class="mb-5 w-full">
            <x-label for="content" class="mb-3 w-full text-base" value="Contenus de l'article"></x-label>
            <textarea name="content" id="content"
                class="description sec {{ $errors->has('content') ? 'border-red-500' : '' }} h-60 w-full border border-gray-300 bg-gray-100 p-3 outline-none"
                placeholder="Describe everything about this post here">{{ old('content') ?? $post->content }}</textarea>
            @if ($errors->has('content'))
                <p class="text-xs italic text-red-500">{{ $errors->first('content') }}</p>
            @endif
        </div>
        <div class="mb-3 w-full">
            <div class="flex items-center justify-evenly">

                <x-label for="image"
                    class="text-blue {{ $errors->has('image') ? 'border-red-500' : '' }} flex w-64 cursor-pointer flex-col items-center rounded-lg border border-blue-500 bg-white px-4 py-6 uppercase tracking-wide shadow-lg duration-300 hover:bg-blue-500 hover:text-white">
                    <svg class="h-8 w-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 p-1 text-center text-base leading-normal">Selectinner l'image du post</span>
                    <x-input id="image" type="file" value="{{ old('image') ?? $post->image }}" name="image"
                        class="hidden w-full"></x-input>
                </x-label>
                <img width="250" src="{{ url("/storage/$post->image") }}" alt="{{ $post->title }}">
            </div>
            @if ($errors->has('image'))
                <p class="text-xs italic text-red-500">{{ $errors->first('image') }}</p>
            @endif
        </div>
        <div class="mb-3 w-full">
            <x-label for="category" value="Categorie du post" class="mb-3 w-full text-base"></x-label>
            <select name="category" id="category" class="{{ $errors->has('category') ? 'border-red-500' : '' }} w-full">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $category->id == (old('category') ?? $post->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>

            @if ($errors->has('category'))
                <p class="text-xs italic text-red-500">{{ $errors->first('category') }}</p>
            @endif
        </div>
        <!-- buttons -->
        <div class="buttons mr-auto mt-5 flex">
            <a href="{{ route('posts.index') }}" onclick="return confirm('Voulez vous vraiment annuler')"
                class="btn ml-auto cursor-pointer border border-gray-300 py-3 px-5 font-semibold text-gray-500">Cancel
            </a>
            <button type="submit"
                class="btn ml-2 cursor-pointer border border-blue-500 bg-blue-500 py-3 px-5 font-semibold text-gray-200">
                Post</button>
        </div>
    </form>
@endsection
