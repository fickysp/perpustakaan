@extends('layout.app')
@section('title', 'Tambah Data')
@section('content')


<form action="{{route('user.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Nama Lengkap :</label>
        <input class="form-control" type="text" name="name">
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input class="form-control" type="email" name="email">
    </div>
    <div class="form-group">
        <label for="">Password :</label>
        <input class="form-control" type="password" name="password">
    </div>
    <div class="form-group">
    <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>
@endsection
