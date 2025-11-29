<x-layout>
    <x-slot:title>Halaman Daftar Posts</x-slot:title>

    <h1 class="text-3xl font-bold mb-6">Daftar Posts</h1>

    @foreach ($posts as $post)
        <article class="mb-8 border-b border-gray-300 pb-8">
            <h2 class="text-2xl font-bold mb-2">
                <a href="/posts/{{ $post->slug }}" class="hover:text-blue-600 hover:underline">
                    {{ $post->title }}
                </a>
            </h2>
            
            <div class="text-gray-500 text-sm mb-4">
                By {{ $post->author->name }} in {{ $post->category->name }}
            </div>

            <p class="text-gray-700 mb-4">{{ $post->excerpt }}</p>
            
            <a href="/posts/{{ $post->slug }}" class="text-blue-500 hover:underline font-medium">
                Read more &raquo;
            </a>
        </article>
    @endforeach

</x-layout>