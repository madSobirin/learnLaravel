<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List Kontak</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-2xl shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Pesan Masuk</h1>
        <table class="w-full border border-gray-200 rounded-xl overflow-hidden shadow">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="p-3 text-left">No</th>
                    <th class="p-3 text-left">Nama</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Pesan</th>
                    <th class="p-3 text-left">Waktu</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $index => $contact)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $index + 1 }}</td>
                        <td class="p-3">{{ $contact->name }}</td>
                        <td class="p-3">{{ $contact->email }}</td>
                        <td class="p-3">{{ $contact->message }}</td>
                        <td class="p-3">{{ $contact->created_at->format('d M Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-3 text-center text-gray-500">Belum ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
