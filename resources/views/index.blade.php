<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Jazcourse</title>
    @vite('resources/css/app.css')
</head>

<body class="font-poppins bg-white text-gray-900">

    <!-- Header -->
    <header class="fixed top-0 w-full bg-white shadow-lg z-10 px-10 py-4 flex items-center justify-between">
        <a href="#" class="logo flex items-center">
            <img src="assets/images/MK3 LOGO edited.png" class="w-44" alt="Logo Jazcourse">
        </a>
        <ul class="hidden md:flex space-x-6 uppercase font-semibold text-orange-600">
            <li><a href="#home">Home</a></li>
            <li><a href="#paketbelajar">Paket Belajar</a></li>
            <li><a href="#pembelajaran">Pembelajaran</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </header>

    <!-- Home Section -->
    <section id="home" class="flex flex-wrap items-center min-h-screen bg-yellow-300 px-10 py-24">
        <div class="flex-1">
            <span class="text-lg font-semibold uppercase text-black">Welcome To</span>
            <h1 class="text-4xl font-bold text-black">Jazcourse</h1>
            <h2 class="text-2xl font-semibold text-white mt-2 uppercase">Platform Pembelajaran <br> Berbasis Web</h2>
            <a href="#paketbelajar" class="mt-4 inline-block px-6 py-2 border-2 border-black text-black font-medium rounded-full hover:bg-orange-600 hover:text-white">Berlangganan</a>
        </div>
        <div class="flex-1">
            <img src="assets/images/siswa.png" alt="Siswa" class="w-full animate-pulse">
        </div>

    </section>

    <!-- Paket Belajar Section -->
    <section id="paketbelajar" class="px-10 py-24 text-center">
    <div>
        <span class="text-lg font-semibold text-black">Ayo Berlangganan Sekarang!</span>
        <h1 class="text-3xl font-bold text-yellow-500">Paket Belajar</h1>
    </div>
    <div class="flex flex-wrap gap-6 justify-center mt-12">
        @foreach ($paketBelajars as $paket)
            <div class="bg-yellow-500 p-6 rounded-lg w-80 text-center">
                <div class="h-36 mb-4">
                    <img src="{{ asset('storage/' . $paket->image) }}" alt="{{ $paket->name }}" class="w-full h-full object-contain mx-auto">
                </div>
                <div class="text-black text-lg font-semibold mb-1">{{ $paket->name }}</div>
                <span class="text-black text-xl font-semibold">Rp. {{ number_format($paket->price, 0, ',', '.') }}</span>
                <a href="#paketbelajar" class="mt-4 inline-block px-6 py-2 border-2 border-black text-black font-medium rounded-full hover:bg-white">Berlangganan</a>

            </div>
        @endforeach
    </div>
</section>


    <!-- Pembelajaran Section -->
<section id="pembelajaran" class="px-10 py-24 text-center">
    <div>
        <span class="text-lg font-semibold text-black">Ayo Belajar Sekarang!</span>
        <h1 class="text-3xl font-bold text-yellow-500">Pilihan Materi Pembelajaran</h1>
    </div>
    <div class="mt-12 flex flex-wrap gap-12 justify-center items-center">
        @foreach ($pembelajarans as $pembelajaran)
        <div class="flex flex-col md:flex-row items-center">
            <img src="{{ asset('storage/' . $pembelajaran->image) }}" alt="{{ $pembelajaran->name }}" class="w-80 h-80 object-cover">
            <div class="text-left p-4 max-w-lg">
                <h2 class="text-xl font-semibold text-black">{{ $pembelajaran->name }}</h2>
                <p class="text-gray-600 mt-2">{{ strip_tags($pembelajaran->description) }}</p>
                <a href="#paketbelajar" class="mt-4 inline-block px-6 py-2 border-2 border-black text-black font-medium rounded-full hover:bg-orange-600 hover:text-white">Berlangganan</a>
            </div>
        </div>
        @endforeach
    </div>
</section>


    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 text-center">
        <div class="space-x-6 mb-4">
            <a href="#" class="text-gray-300 hover:text-orange-500">Privacy Policy</a>
            <a href="#" class="text-gray-300 hover:text-orange-500">Terms Of Use</a>
            <a href="#" class="text-gray-300 hover:text-orange-500">Our Company</a>
        </div>
        <p class="text-gray-500">© Jazcourse 2024. All rights reserved.</p>
    </footer>

</body>
</html>
