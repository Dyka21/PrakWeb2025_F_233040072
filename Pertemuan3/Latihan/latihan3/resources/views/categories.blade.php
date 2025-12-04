<x-layout>
    <x-slot:title>Daftar Kategori</x-slot:title>

    <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Kategori</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($categories as $category)
            {{-- UBAH DARI DIV JADI A (LINK) --}}
            <a href="/categories/{{ $category->slug }}" 
                class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 transition duration-300 transform hover:-translate-y-1">
                <h2 class="text-2xl font-bold tracking-tight text-blue-600 text-center">
                    {{ $category->name }}
                </h2>
                
            </a>
        @endforeach
    </div>

</x-layout>