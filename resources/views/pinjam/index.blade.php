@extends('layout.app')
@section('title', 'Kategori Buku')

@section('content')
<div align="right">
    <a href="{{ route('pinjam.create')}}" class="btn btn-primary">Tambah</a>
</div>
<table class="table table-borderes">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach($datas as $data)
    <tbody>
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->category_name}}</td>
            <td>
                <a href="{{route('category.edit', $data->id)}}" class="btn btn-success mb-3">Edit</a>
                <form action="{{route('category.destroy', $data->id)}}" method="post">
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
