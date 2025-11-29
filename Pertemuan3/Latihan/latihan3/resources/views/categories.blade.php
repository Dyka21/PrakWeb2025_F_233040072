<x-layout>
    <x-slot:title>Daftar Kategori</x-slot:title>

    <h1 class="text-3xl font-bold mb-6">Daftar Kategori</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($categories as $category)
            <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 transition">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-blue-600 text-center">
                    {{ $category->name }}
                </h2>
                </div>
        @endforeach
    </div>

</x-layout>