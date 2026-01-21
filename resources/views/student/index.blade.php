<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>
            Daftar Siswa
        </h1>
        <ul>
            <ol type="1">
                @forelse ($students as $student)
                    <li>{{ $student }}</li>
                @empty
                    <p>Data siswa tidak ada</p>
                @endforelse

            </ol>
        </ul>
    </div>

    <div>
        <h1>
            Daftar Kelas
        </h1>
        <ul>
            <ol type="1">
                @forelse ($class as $clas)
                    <li>{{ $clas }}</li>
                @empty
                    <p>Data kelas siswa tidak ada</p>
                @endforelse

            </ol>
        </ul>
    </div>
    <script scr="http://cdn.tailwindcss.com"></script>
</body>

</html>