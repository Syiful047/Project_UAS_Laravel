@extends('template/admin')

@section('content1')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Users</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-warning" href="/admin">Home</a></li>
              <li class="breadcrumb-item"><a class="text-warning" href="/users">Daftar Users</a></li>
              <li class="breadcrumb-item active">Tambah Users</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('content2')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }} </li>
        @endforeach
        </ul>
    </div>
    @endif
    <form action="/users" method="post" class="mx-2">
        @csrf
        <div class="form-group mt-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama User" value="">
        </div>
        <div class="form-group mt-3">
            <label for="email">email</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan Nama Email" value="">
        </div>
        <div class="form-group mt-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Nama Password" value="">
        </div>
        <div class="form-group mt-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-warning">Simpan</button>
        </div>
    </form>
</div>
@endsection