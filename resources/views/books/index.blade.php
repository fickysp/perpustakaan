@extends('layout.app')
@section('title', 'Data Buku')

@section('content')
<div align="right">
    <a href="{{ route('book.create')}}" class="btn btn-primary">Tambah</a>
</div>
<table class="table table-borderes">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach($datas as $data)
    <tbody>
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->category->category_name}}</td>
            <td>{{$data->judul}}</td>
            <td>{{$data->penerbit}}</td>
            <td>{{$data->tahun_terbit}}</td>
            <td>{{$data->penulis}}</td>
            <td>
                <a href="{{route('book.edit', $data->id)}}" class="btn btn-success mb-3">Edit</a>
                <form action="{{route('book.destroy', $data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
