@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h1>Data Siswa SMKN 1</h1>
            <a href="{{route("sekolah.create")}}">Tambah Data Siswa</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                    {{--  @foreach ($products as $product)  --}}
                    <tr>
                        <td>4411122</td>
                        <td>Wahyu Alif</td>
                        <td>Mars, 04122229</td>
                        <td>
                           <input type="button" value="Edit" class="btn btn-warning">
                           <input type="button" value="Hapus" class="btn btn-danger">
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>
@endsection