@extends('template/admin')

@section('content1')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Products</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-warning" href="/admin">Home</a></li>
              <li class="breadcrumb-item"><a class="text-warning" href="/product">Daftar Products</a></li>
              <li class="breadcrumb-item active">Tambah Products</li>
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

    <form action="/product" method="post" class="mx-2">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="text" name="photo" id="photo" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="text" name="stock" id="stock" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group mt-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-warning">Simpan</button>
        </div>
        <br>
    </form>
</div>
@endsection