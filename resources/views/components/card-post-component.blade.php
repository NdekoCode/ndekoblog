<div {{ $attributes }}>

    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        {{-- Avec created_at on a une instance de carbone --}}
        <div class="flex items-center justify-between"><span class="font-light text-gray-600">{{ $post->created_at->format('M d, Y')}}</span><a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">{{ $post->category->name }}</a>
        </div>
        <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">{{$post->title}}</a>
            <p class="mt-2 text-gray-600">{{ $post->excerpt() }}</p>
        </div>
        <div class="flex items-center justify-between mt-4"><a href="#" class="text-blue-500 hover:underline">Read more</a>
            {{ $slot }}
        </div>
    </div>

</div>
