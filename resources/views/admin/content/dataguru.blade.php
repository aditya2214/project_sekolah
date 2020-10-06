@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Data Guru</h1>
    <ol  class="breadcrumb mb-4" >
        <li class="breadcrumb-item active">Data Guru</li>
    </ol>
    <div class="row">
        <!-- input -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"> <p><b>Tambah Data Murid</b></p></div>
                <div class="card-body">
                    <form action="{{ url ('dashboard/data_guru/save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Nama" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nip" class="form-control" placeholder="NIP" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nuptk" class="form-control" placeholder="NUPTK" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="no_hp" class="form-control" placeholder="No. Hp" id="" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="alamat" placeholder="Alamat" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="pangkat" class="form-control" placeholder="Pangkat, Gol. Ruang" id="" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="masa_kerja" class="form-control" placeholder="Masa Kerja" id="" required>
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
                        <th>Delete</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>NIP</th>
                        <th>NUPTK</th>
                        <th>No. Hp</th>
                        <th>Alamat</th>
                        <th>Pangkat, Gol. Ruang</th>
                        <th>Masa Kerja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataguru as $dg)
                    <tr>
                        <td>
                            <a href="{{ url ('dashboard/data_guru/delete/'.$dg->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                        <td>{{$dg->nama}}</td>
                        <td>{{$dg->tempat_lahir}}</td>
                        <td>{{$dg->tanggal_lahir}}</td>
                        <td>{{$dg->nip}}</td>
                        <td>{{$dg->nuptk}}</td>
                        <td>{{$dg->no_hp}}</td>
                        <td>{{$dg->alamat}}</td>
                        <td>{{$dg->pangkat}}</td>
                        <td>{{$dg->masa_kerja}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection