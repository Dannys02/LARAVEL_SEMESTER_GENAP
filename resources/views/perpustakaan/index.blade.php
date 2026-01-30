<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Daftar Koleksi Buku</h1>
        <div class="list-group mt-4 w-50 mx-auto">
            @foreach($buku as $b)
                <div class="list-group-item">{{ $b }}</div>
            @endforeach
        </div>
    </div>
</body>
</html>