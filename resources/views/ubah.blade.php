@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Data User SMKN 1</h1>
        </div>
        <div class="card-body">
            <form action="{{route('users.update', $users->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" required value="{{$users->name}}">
                    Email <input type="email" name="email" required value="{{$users->email}}" >
                    Password <input type="text" name="password" required value="{{$users->password}}" >
                    Hak Akses
                    <select name="login_role" id="">
                        <option value="siswa" {{($users->role == "siswa") ? "selected" : ""}}>Siswa</option>
                        <option value="guru" {{($users->role == "guru") ? "selected" : ""}}>Guru</option>
                    </select>
                </ul>
                <hr>
                <a href="{{route('users.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection