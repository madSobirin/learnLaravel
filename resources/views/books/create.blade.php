<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
</head>

<body>
    <h1>Tambah Buku Baru</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="author" value="{{ old('author') }}"><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="year" value="{{ old('year') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
</body>

</html>
