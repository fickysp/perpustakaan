<form action="{{route('store_tambah')}}" method="post">
    @csrf
    <h3>Tambah</h3>
    <div class="form-group">
        <label for="">Angka 1</label>
        <input type="text" name="angka1">
    </div>
    <div class="form-group">
        <label for="">Angka 2</label>
        <input type="text" name="angka2">
    </div>

    <h3>Kurang</h3>
    <div class="form-group">
        <label for="">Angka 1</label>
        <input type="text" name="angka3">
    </div>
    <div class="form-group">
        <label for="">Angka 2</label>
        <input type="text" name="angka4">
    </div>
    <h3>Kali</h3>
    <div class="form-group">
        <label for="">Angka 1</label>
        <input type="text" name="angka5">
    </div>
    <div class="form-group">
        <label for="">Angka 2</label>
        <input type="text" name="angka6">
    </div>
    <h3>bagi</h3>
    <div class="form-group">
        <label for="">Angka 1</label>
        <input type="text" name="angka7">
    </div>
    <div class="form-group">
        <label for="">Angka 2</label>
        <input type="text" name="angka8">
    </div>
    <div class="form-group">
        <button type="submit"> Tambah </button>
    </div>
</form>

<h1>Jumlahnya + adalah : {{ $jumlah }}</h1>
<h1>Jumlahnya - adalah : {{ $kurang }}</h1>
<h1>Jumlahnya x adalah : {{ $kali }}</h1>
<h1>Jumlahnya / adalah : {{ $bagi }}</h1>
