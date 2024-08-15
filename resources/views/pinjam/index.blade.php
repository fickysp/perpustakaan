@extends('layout.app')
@section('title', 'Kategori Buku')

@section('content')
    <div align="right">
        <a href="{{ route('pinjam.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-borderes">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Nama Anggota</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        @foreach ($pinjams as $pinjam)
            <tbody>
                <tr>
                    <td>{{ $pinjam->id }}</td>
                    <td>{{ $pinjam->kode_transaksi }}</td>
                    <td>{{ $pinjam->anggota->nama_anggota }}</td>
                    <td>{{ date('D, d-m-Y', strtotime($pinjam->tgl_pinjam)) }}</td>
                    <td>{{ date('D, d-m-Y', strtotime($pinjam->tgl_kembali)) }}</td>
                    <td>
                        <a href="{{ route('pinjam.edit', $pinjam->id) }}" class="btn btn-success btn-sm mb-3">Edit</a>
                        <form action="{{ route('pinjam.destroy', $pinjam->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
