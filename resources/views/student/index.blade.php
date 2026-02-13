<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="p-4">
    <h1>
      Daftar Siswa
    </h1>
    <div class="row">
      <div class="col-sm-10 m-auto">
        <table class="table table-hover table-bordered shadow-sm">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Nama Siswa</th>
              <th>Jurusan</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($students as $s)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $s->nama }}</td>
              <td>{{ $s->jurusan }}</td>
            </tr>
            @empty
            <tr>
              <td colspan="3" class="text-center">
                <div class="alert alert-dark d-inline-block">
                  Tidak ada data..
                </div>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>