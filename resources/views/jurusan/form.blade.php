@extends("layouts.app")
@section("form")
    <div class="mb-3">
        <form action="/jurusan/store" method="POST">
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Masukan jurusan:</label>
            <input type="text" name="nama_jurusan" class="form-control" id="exampleFormControlInput1"
                placeholder="contoh: rpl"><br />
            <button class="btn btn-primary" type="submit">
                Tambah
            </button>
        </form>
    </div>
@endsection