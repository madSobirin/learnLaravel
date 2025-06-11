<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css'])
    <title>Halaman Artikel</title>
</head>

<body class="bg-gray-50 text-gray-800">
    <x-navbar></x-navbar>

    <section class="py-12 px-4 max-w-7xl mt-10">
        <h2 class="text-3xl font-bold text-center text-teal-600 mb-10">Artikel Terbaru</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Artikel 1 -->
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300">
                <img src="{{ asset('img/bola.jpg') }}" alt="Artikel 1" class="w-full h-72 rounded-3xl object-cover mb-4">
                <h3 class="text-xl font-semibold mb-2">Teknologi Masa Depan</h3>
                <p class="text-gray-600 mb-4">Pelajari bagaimana kecerdasan buatan dan teknologi blockchain membentuk
                    dunia baru yang lebih efisien dan terhubung.</p>
                <a href="#" class="inline-block text-teal-600 font-medium hover:underline">Baca Selengkapnya →</a>
            </div>

            <!-- Artikel 2 -->
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300">
                <img src="{{ asset('img/bola.jpg') }}" alt="Artikel 2"
                    class="w-full h-72 rounded-3xl object-cover mb-4">

                <h3 class="text-xl font-semibold mb-2">Inovasi di Dunia Pendidikan</h3>
                <p class="text-gray-600 mb-4">Transformasi digital telah mengubah cara kita belajar. Temukan platform
                    dan metode pembelajaran terbaru di sini.</p>
                <a href="#" class="inline-block text-teal-600 font-medium hover:underline">Baca Selengkapnya →</a>
            </div>

            <!-- Artikel 3 -->
            <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300">
                <img src="{{ asset('img/bola.jpg') }}" alt="Artikel 3"
                    class="w-full h-72 rounded-3xl object-cover mb-4">
                <h3 class="text-xl font-semibold mb-2">Gaya Hidup Sehat Modern</h3>
                <p class="text-gray-600 mb-4">Tips menjaga kesehatan fisik dan mental dengan pendekatan holistik di era
                    digital yang serba cepat.</p>
                <a href="#" class="inline-block text-teal-600 font-medium hover:underline">Baca Selengkapnya →</a>
            </div>
        </div>
    </section>
    {{-- Footer Start --}}
    <x-footer></x-footer>
    {{-- Footer End --}}

</body>

</html>
