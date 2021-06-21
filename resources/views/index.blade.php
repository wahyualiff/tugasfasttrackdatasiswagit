@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h1>Data Siswa SMKN 1</h1>
            <a href="{{route("siswa.create")}}">[+] Tambah Data Siswa</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($siswa as $s)
                    <tr>
                        <td>{{$s->nis}}</td>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->tgl_lahir}}</td>
                        <td>
                            <ul class="nav">
                            <a href="{{route('siswa.show', $s->id)}}" class="btn btn-primary">Detail</a>
                            <a href="{{route('siswa.edit', $s->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('siswa.destroy', $s->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>
    </div>
</div>
@endsection