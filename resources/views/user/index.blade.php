@extends('layouts.template')

@section('title')
Halaman Data Petugas
@endsection
@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <p>Halaman Petugas</p>
            <hr>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
                        @if($row->level=='petugas')
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->username}}</td>
                            <td>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Pilihan</button>
                                    <div class="dropdown-menu" x-placement="bottom-start"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(211px, 231px, 0px);">
                                        <a class="dropdown-item" href="{{route('user.edit', $row->id)}}">Detail</a>
                                        <form action="{{route('user.destroy', $row->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item"
                                                onclick="return confirm('Hapus {{$row->nama}}?')">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <p>Tambah Petugas</p>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <input type="hidden" name="level" class="form-control" value="petugas">
                <div class="form-group">
                    <label>Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" name="name" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" name="username" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" required class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>

</div>


@endsection
