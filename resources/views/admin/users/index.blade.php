@extends('template/admin')

@section('content1')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Daftar Users</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-warning" href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Daftar Users</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('content2')
<div class="container">
    @if(Auth::user()->role == 'admin')
    <a href="/users/create" class="btn btn-warning">+ Add User</a>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $iteration = 1 @endphp
            @foreach ($users as $item)
            <tr>
                <td>{{ $iteration++ }}</td>
                <td><?= $item['name']?></td>
                <td><?= $item['email']?></td>
                <td><?= $item['password']?></td>
                <td> 
                    @if(Auth::user()->role == 'admin')
                    <a href="/users/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/users" method="POST" class="d-inline">
                    @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                    @else
                    -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection