<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <x-navbar></x-navbar>


    <div class="w-full max-w-2xl bg-white p-8 rounded-2xl shadow-md mt-15">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Contact Us</h2>

        @if (session('success'))
            <div class="mb-4 p-4 text-green-800 bg-green-100 rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name"
                    class="mt-1 block w-full border border-gray-300 rounded-xl p-3 focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="mt-1 block w-full border border-gray-300 rounded-xl p-3 focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" id="message" rows="5"
                    class="mt-1 block w-full border border-gray-300 rounded-xl p-3 focus:ring-blue-500 focus:border-blue-500" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition duration-200">
                    Send
                </button>
            </div>

        </form>

    </div>

</body>

</html>
