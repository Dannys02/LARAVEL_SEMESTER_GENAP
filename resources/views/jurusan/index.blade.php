@extends("layouts.app")
@section("content")

    <a href="/jurusan/create" class="btn btn-primary mb-3">+ jurusan</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jurusan as $j)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $j->nama_jurusan }}</td>
                    <td>
                        <a href="/jurusan/edit/{{ $j->id }}" class="btn btn-warning">Edit</a>

                        <form action="/jurusan/{{ $j->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
            </tr> @empty
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection 