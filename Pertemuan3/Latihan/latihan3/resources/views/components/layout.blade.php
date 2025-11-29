<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>{{ $title ?? 'Laravel Pake Tailwind' }}</title>
</head>
<body class="flex flex-col min-h-screen"> <nav class="bg-blue-600 p-4 text-white">
        <a href="/" class="mr-4 hover:underline">Home</a>
        <a href="/about" class="mr-4 hover:underline">About</a>
        <a href="/posts" class="mr-4 hover:underline">Blog</a>
        <a href="/contact" class="hover:underline">Contact</a>
    </nav>

    <main class="flex-grow p-6">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        &copy; 2025 Latihan Laravel 
    </footer>

</body>
</html>