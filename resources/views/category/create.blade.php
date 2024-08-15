@extends('layout.app')
@section('title', 'Tambah Kategori')
@section('content')


<form action="{{route('category.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Nama Kategori:</label>
        <input class="form-control" type="text" name="category_name">
    </div>
    <div class="form-group">
    <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>

        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>
@endsection
