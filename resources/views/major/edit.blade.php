@extends('major.layouts.app')
@section('create')
    <form action="/major/update/{{ $major->id }}" method="POST" onsubmit="this.querySelector('button[type=submit]').disabled=true;">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="major_name" class="form-label">Edit Major :</label>
            <input type="text" value="{{ $major->major_name }}" name="major_name" class="form-control" id="major_name">
            @error('major_name')
                <div class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection