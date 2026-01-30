<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="/siswa">Data Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/guru">Data Guru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gallery">Gallery</a>
            </li>
        </ul>
    </nav>

    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1515966097209-ec48f3216288?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDExfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1518086280536-0a9b0e18911e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE4fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTI0fHx8bmF0dXJlfGVufDB8fDB8fHw%3D&auto=format&fit=crop&w=700&q=60" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://media.istockphoto.com/id/503915790/photo/sea-with-rocks-and-sunset-glow.webp?s=170667a&w=0&k=20&c=d7B_LJmEzXGrMi6UC7GoJBfIcyv3BJ057c-h-C3O0M=60" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1466927593098-4d4aa7a2b2d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1414500923875-1704944d8df7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Copyright © {{ date("Y") }}
        </div>
    </footer>
</body>
</html>