@extends('template/admin')

@section('content1')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edits Products</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-warning" href="/admin">Home</a></li>
              <li class="breadcrumb-item"><a class="text-warning" href="/product">Daftar Products</a></li>
              <li class="breadcrumb-item active">Edits Products</li>
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

    <form action="/product/{{ $product->id }}" method="post" class="mx-2">
        @csrf
        @method('PUT')
        <div class="form-group mt-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Masukkan nama user" value="{{$product->name}}">
        </div>
        <div class="form-group mt-3">
            <label for="photo">photo</label>
            <input type="text" class="form-control" name="photo" value="{{$product->photo}}">
        </div>
        <div class="form-group mt-3">
            <label for="price">price</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group mt-3">
            <label for="stock">stock</label>
            <input type="text" class="form-control" name="stock" value="{{$product->stock}}">
        </div>
        <div class="form-group mt-3">
            <label for="description">description</label>
            <textarea class="form-control" name="description">{{$product->description}}</textarea>
        </div>
        <div class="form-group mt-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-warning">Simpan</button>
        </div>
        <br>
    </form>
</div>
@endsection