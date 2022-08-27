@extends('layouts.template')

@section('title')
Halaman Data Petugas
@endsection
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <p>Halaman Pelanggan</p>
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
                        @if($row->level=='pelanggan')
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


@endsection
