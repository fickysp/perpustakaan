@extends('layout.app')
@section('title', 'Tambah Peminjaman')
@section('content')


    <form action="{{ route('pinjam.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Kode Transaksi</label>
                    </div>
                    <div class="col-sm-6">
                        <input value="{{ $kode_transaksi }}" class="form-control" type="text" name="kode_transaksi"
                            readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Nama Anggota</label>
                    </div>
                    <div class="col-sm-6">
                        <select name="anggota_id" id="anggota_id" class="form-control">
                            <option value="">Pilih Anggota</option>
                            @foreach ($anggotas as $ang)
                                <option value="{{ $ang->id }}">{{ $ang->nama_anggota }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Tanggal Pinjam</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="tgl_pinjam">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Tanggal Kembali</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="tgl_kembali">
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-6">
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Kode Transaksi</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="category_name" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Nama Anggota:</label>
                    </div>
                    <div class="col-sm-6">
                        <select name="" id="" class="form-control">
                            <option value="">Pilih Anggota</option>
                            <option value="">Pilih Anggota</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Tanggal Pinjam:</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="category_name" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">Tanggal Kembali:</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="category_name" >
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="form-group row mt-5">
            <div class="col-sm-2">
                <label for="">Kategori Buku</label>
            </div>
            <div class="col-sm-4">
                <select name="" id="category_id" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="">Judul Buku</label>
            </div>
            <div class="col-sm-4">
                <select name="" id="buku_id" class="form-control">
                    <option value="">Pilih Judul Buku</option>
                </select>
                <input type="hidden" name="" id="nama_penerbit">

            </div>
        </div>
        <div class="form-group">
            <div align="right">
                <button type="button" class="btn btn-success mb-3" id="tambah-row">Tambah Row</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
@endsection
