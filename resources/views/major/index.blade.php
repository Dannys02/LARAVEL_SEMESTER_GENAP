@extends('major.layouts.app')

@section('content')
    <h1>Daftar Jurusan</h1>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($major as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->major_name }}</td>
                    <td class="d-flex gap-2">
                        <a href="/major/edit/{{ $m->id }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="/major/delete/{{ $m->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus major {{ $m->major_name }}?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center p-4">Data Jurusan Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection