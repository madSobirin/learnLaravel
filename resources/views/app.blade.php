<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css'])
</head>

<body>
    <x-navbar></x-navbar>
    <!-- Article Start -->
    <section class="py-16 bg-gray-50 mt-5">
        <div class="max-w-4xl mx-auto space-y-6">

            <!-- Artikel 1 -->
            <div
                class="bg-gradient-to-r from-amber-400 to-yellow-300 p-6 md:p-8 rounded-3xl shadow-lg transition hover:shadow-xl">
                <h1 class="text-xl md:text-1xl font-semibold text-gray-900">
                    Ini adalah artikel pertama saya. Saya yakin akan menjadi orang sukses di kemudian hari. Saya bisa
                    membahagiakan orang tua saya dan bisa mengumrohkan mereka. Aamiin.
                </h1>
            </div>
            <!-- Artikel 2 -->
            <div
                class="bg-gradient-to-r from-indigo-400 to-blue-300 p-6 md:p-8 rounded-3xl shadow-lg transition hover:shadow-xl">
                <h1 class="text-xl md:text-1xl font-semibold text-white">
                    Halo! Saya Ahmad, seorang pemuda penuh semangat yang terus belajar dan berkembang untuk masa depan
                    yang lebih cerah.
                </h1>
            </div>

            <!-- Artikel 3 -->
            <div
                class="bg-gradient-to-r from-teal-400 to-green-300 p-6 md:p-8 rounded-3xl shadow-lg transition hover:shadow-xl">
                <h1 class="text-xl md:text-1xl font-semibold text-white">
                    Mimpi besar membutuhkan usaha besar. Tidak ada kata terlambat untuk memulai perubahan dalam hidup.
                    Langkah kecil hari ini bisa menjadi awal keberhasilan besar esok hari.
                </h1>
            </div>

            <!-- Artikel 4 -->
            <div
                class="bg-gradient-to-r from-rose-400 to-pink-300 p-6 md:p-8 rounded-3xl shadow-lg transition hover:shadow-xl">
                <h1 class="text-xl md:text-1xl font-semibold text-white">
                    Setiap kegagalan adalah pelajaran berharga. Saya belajar untuk bangkit, tumbuh, dan terus berjuang.
                    Karena saya percaya, kerja keras tidak akan mengkhianati hasil.
                </h1>
            </div>

            <!-- Artikel 5 -->
            <div
                class="bg-gradient-to-r from-purple-400 to-fuchsia-300 p-6 md:p-8 rounded-3xl shadow-lg transition hover:shadow-xl">
                <h1 class="text-xl md:text-1xl font-semibold text-white">
                    Dunia ini luas, peluang begitu banyak. Dengan niat baik, semangat tinggi, dan doa, saya percaya
                    semua impian bisa jadi nyata.
                </h1>
            </div>

        </div>
    </section>

    <!-- Article End -->
    <x-footer></x-footer>

</body>

</html>
