@extends("layouts.app")
@section("formEdit")
    <div class="mb-3">
        <form action="/jurusan/update/{{ $jurusan->id }}">
            @csrf
            @method('PUT')
            <label for="exampleFormControlInput1" class="form-label">Masukan jurusan:</label>
            <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" class="form-control" id="exampleFormControlInput1"
                placeholder="contoh: rpl"><br />
            <button type="submit">
                Update
            </button>
        </form>
    </div>
@endsection