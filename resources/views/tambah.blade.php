@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Data Siswa SMKN 1</h1>
            <form action="#" method="POST">
                <ul class="list-group">
                    NIS <input type="text" name="nis" required>
                    Nama <input type="text" name="nama" required>
                    Tempat, Tanggal Lahir <input type="text" name="ttl" required>
                </ul>
                <hr>
                <a href="/siswa" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-secondary">
            </form>
        </div>
    </div>
</div>
@endsection