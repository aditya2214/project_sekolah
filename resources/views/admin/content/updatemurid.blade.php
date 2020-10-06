@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Data Murid</h1>
    <ol  class="breadcrumb mb-4" >
        <li class="breadcrumb-item active">Kelas :</li>
        <li>
            <form action="{{ url('dashboard/search')}}" method="get">
                <div class="form-group form-check">
                    @foreach($kelas as $k)
                    <input style="margin-left:10px;" name="kelas[]" value="{{$k->kelas}}" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label style="margin-left:30px;" class="form-check-label" for="exampleCheck1">{{$k->kelas}}</label>
                    @endforeach
                    <input style="margin-left:10px;" name="kelas" value="" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label style="margin-left:30px;" class="form-check-label" for="exampleCheck1">Lihat Semua</label>
                    <button style="margin-left:30px;" type="submit" class="btn btn-primary btn-sm">Pilih</button>
                </div>
            </form>
        </li>
    </ol>
    <div class="row">
        <!-- input -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"> <p><b>Edit Data Murid</b></p><a href="{{url ('dashboard/data_murid')}}" class="btn btn-primary btn-sm">Tambah murid</a></div>
                <div class="card-body">
                    <form action="{{ url ('dashboard/data_murid/update/'.$update_murid->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" value="{{$update_murid->nama_murid}}" name="namamurid" class="form-control" placeholder="Nama Murid" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$update_murid->NISN}}" name="nisn" class="form-control" placeholder="NISN" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$update_murid->NIS}}" name="nis" class="form-control" placeholder="NIS" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$update_murid->tempat_lahir}}" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="date" value="{{$update_murid->tanggal_lahir}}" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" id="" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="alamatmurid"  placeholder="Alamat" id="exampleFormControlTextarea1" rows="3">{{$update_murid->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$update_murid->no_tlp}}" name="nomertlpmurid" class="form-control" placeholder="Wali Murid" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$update_murid->nama_ortu}}" name="wali_murid" class="form-control" placeholder="Nomor Telpon" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{$update_murid->kelas}}" name="kelas" class="form-control" placeholder="Kelas" id="" required>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="col-md-9" style="overflow-x:auto;">
            <table id="dataTable" class="table table-hover">
                <thead>
                    <tr class="center">
                        <th>Nama Murid</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Nomer Telpon</th>
                        <th>Nama Orang Wali</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_murid as $d)
                    <tr>
                        <td>{{$d->nama_murid}}</td>
                        <td>{{$d->NISN}}</td>
                        <td>{{$d->NIS}}</td>
                        <td>{{$d->tempat_lahir}}</td>
                        <td>{{$d->tanggal_lahir}}</td>
                        <td>{{$d->alamat}}</td>
                        <td>{{$d->no_tlp}}</td>
                        <td>{{$d->nama_ortu}}</td>
                        <td>{{$d->kelas}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h1>Halaman Edit</h1>
        </div>

    </div>
</div>
@endsection