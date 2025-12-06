<x-layout>
    <x-slot:title>{{ $post->title }}</x-slot:title>

    <article class="py-8 max-w-screen-md mx-auto ">
        
        <a href="/posts" class="font-medium text-xs text-blue-500 hover:underline">&laquo; Back to all posts</a>

        
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
        
        
        <div class="text-base text-gray-500 mb-5">
            By <a href="/authors/{{ $post->author->username }}" class="hover:underline text-gray-900">{{ $post->author->name }}</a> 
            in <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-gray-900">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>

        
        @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;" class="rounded-lg mb-4">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="w-full object-cover">
            </div>
        @else
            <img class="w-full rounded-lg mb-4" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
        @endif

        
        <div class="my-4 font-light text-gray-900 text-justify">
            {!! $post->body !!}
        </div>
    </article>
</x-layout>