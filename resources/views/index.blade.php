@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h1>Data User SMKN 1</h1>
            <a href="{{route("users.create")}}">[+] Tambah Data User</a>
                <table class="table table-bordered table-striped m-1">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        {{--  <th>Password</th>  --}}
                        <th>Akses</th>
                        <th>Tindakan</th>
                    </tr>
                    @foreach ($users as $us)
                    <tr>
                        <td>{{$us->name}}</td>
                        <td>{{$us->email}}</td>
                        {{--  <td>{{$us->password}}</td>  --}}
                        <td>{{$us->login_role}}</td>
                        <td>
                            <ul class="nav">
                            @role('siswa')
                            <a href="{{route('users.show', $us->id)}}" class="btn btn-primary m-1">Lihat</a>
                            @endrole
                            @role('guru')
                            <a href="{{route('users.edit', $us->id)}}" class="btn btn-warning m-1">Edit</a>
                            @endrole
                            <form action="{{route('users.destroy', $us->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Hapus</button>
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