@extends('layout.template')

@section('title')
    Beranda
@endsection

@section('titlePage')
    <h1 class="m-0">Beranda</h1>
@endsection

@section('content')
    <div class="form-group">
        <label for="position-option">Posisi</label>
        <select class="form-control" id="position-option" name="position_id">
        @foreach ($positions as $position)
            <option value="{{ $position->id }}">{{ $position->position_name }}</option>
        @endforeach
        </select>
    </div>
@endsection
