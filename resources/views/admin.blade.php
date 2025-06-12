<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-8">

    <div class="w-full max-w-4xl bg-white p-8 rounded-3xl shadow-xl">
        <h1 class="text-4xl font-bold text-blue-700 mb-6 text-center">Admin Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <div class="bg-blue-100 border border-blue-300 rounded-2xl p-6 hover:shadow-md transition">
                <h2 class="text-xl font-semibold text-blue-700">Kelola Kontak</h2>
                <p class="text-sm text-blue-600 mt-2">Lihat dan kelola pesan dari form kontak pengunjung.</p>
                <a href="{{ route('contact.index') }}"
                    class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700">Lihat
                    Kontak</a>
            </div>

            <!-- Card 2 -->
            <div class="bg-green-100 border border-green-300 rounded-2xl p-6 hover:shadow-md transition">
                <h2 class="text-xl font-semibold text-green-700">Statistik</h2>
                <p class="text-sm text-green-600 mt-2">Pantau data dan statistik sederhana sistem.</p>
                <button class="mt-4 px-4 py-2 bg-green-600 text-white rounded-xl hover:bg-green-700">Lihat
                    Statistik</button>
            </div>
        </div>

        <div class="mt-10 text-center">
            <p class="text-sm text-gray-500">© {{ now()->year }} Admin Panel by Ahmad</p>
        </div>
    </div>

</body>

</html>
