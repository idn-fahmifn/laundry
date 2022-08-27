<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4>Hallo, <span class="text-bold">{{Auth::user()->name}}</span></h4>
            <hr>
        </div>
        <div class="card-body">
            @if(!$home_pelanggan)
            <span class="text-danger">Anda Belum Melengkapi Data Diri</span>
            <form action="{{route('pelanggan.store')}}" method="post">
                @csrf
                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                <div class="form-group">
                    <label>Nomor Telepon Anda</label>
                    <input type="number" name="no_telepon" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Anda</label>
                    <textarea name="alamat" required rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Kirim</button>
                </div>
            </form>
            @else
            <table class="table table-borderless">
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>{{Auth::user()->name}}</td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>:</td>
                    <td>{{Auth::user()->username}}</td>
                </tr>
                @foreach($home_pelanggan as $row)
                <tr>
                    <th>Nomor Telepon</th>
                    <td>:</td>
                    <td>{{$row->no_telepon}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>{{$row->alamat}}</td>
                </tr>
                @endforeach
            </table>
            @endif
        </div>
    </div>
</div>
