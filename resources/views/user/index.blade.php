@extends('layout.app')
@section('title', 'Data User')

@section('content')
<div align="right">
    <a href="{{ route('user.create')}}" class="btn btn-primary">Tambah</a>
</div>
<table class="table table-borderes">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach($user as $users)
    <tbody>
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>
                <a href="{{route('user.edit', $users->id)}}" class="btn btn-success mb-3">Edit</a>
                <form action="{{route('user.destroy', $users->id)}}" method="post">
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
