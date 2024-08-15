@extends('layout.app')
@section('title', 'Edit Kategori')
@section('content')

<form action="{{route('category.update',$edits->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Nama Lengkap :</label>
        <input class="form-control" type="text" name="category_name" value="{{$edits->category_name}}">
    </div>
    <div class="form-group">
        <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>
@endsection
