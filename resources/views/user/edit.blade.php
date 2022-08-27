@extends('layouts.template')

@section('title')
Halaman Detail Petugas
@endsection
@section('content')

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <p>Halaman Petugas</p>
            <hr>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tr>
                        <th>Nama lengkap</th>
                        <td>:</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>:</td>
                        <td>{{$user->username}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <th>Level</th>
                        <td>:</td>
                        <td>{{$user->level}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <p>Ubah Petugas</p>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{route('user.update', [$user->id])}}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="form-group">
                    <label>Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" name="name" required value="{{$user->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" value="{{$user->email}}" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" name="username" value="{{$user->username}}" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>

</div>


@endsection
