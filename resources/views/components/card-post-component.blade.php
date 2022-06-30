<div {{ $attributes }}>

    <div class="mx-auto max-w-4xl rounded-lg bg-white px-10 py-6 shadow-md">
        {{-- Avec created_at on a une instance de carbone --}}
        <div class="flex items-center justify-between"><span
                class="font-light text-gray-600">{{ $post->created_at->format('M d, Y') }}</span><a href="#"
                class="rounded bg-gray-600 px-2 py-1 font-bold text-gray-100 hover:bg-gray-500">{{ $post->category->name }}</a>
        </div>
        <div class="mt-2"><a href="{{ route('posts.show', $post->id) }}"
                class="text-2xl font-bold text-gray-700 hover:underline">{{ $post->title }}</a>
            <p class="mt-2 text-gray-600">{{ $post->excerpt() }}</p>
        </div>
        <div class="mt-4 flex items-center justify-between"><a href="{{ route('posts.show', $post->id) }}"
                class="text-blue-500 hover:underline">Read
                more</a>
            {{ $slot }}
        </div>
    </div>

</div>
