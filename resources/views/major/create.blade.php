@extends('major.layouts.app')
@section('create')
    <form action="/major/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="major_name" class="form-label">Tambah Major :</label>
            <input type="text" name="major_name" class="form-control" id="major_name">
            @error('major_name')
            <div class="form-text text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection