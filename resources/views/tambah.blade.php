@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Data User SMKN 1</h1>
            <form action="{{route('users.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="name" required>
                    Email <input type="email" name="email" required>
                    Password <input type="password" name="password" required>
                    Akses <input type="text" name="login_role" required>
                </ul>
                <hr>
                <a href="{{route('users.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection