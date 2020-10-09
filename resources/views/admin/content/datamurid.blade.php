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
                <div class="card-header"> <p><b>Tambah Data Murid</b></p></div>
                <div class="card-body">
                    <form action="{{ url ('dashboard/data_murid/save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="namamurid" class="form-control" placeholder="Nama Murid" id="textm" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nisn" class="form-control" placeholder="NISN" id="nisnm" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nis" class="form-control" placeholder="NIS" id="nism" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" id="tmp_lahirm" required>
                        </div>
                        <div class="form-group">
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" id="tgl_lahirm" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="alamatmurid"  placeholder="Alamat" id="alamatmuridm" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nomertlpmurid" class="form-control" placeholder="Nomor Telpon" id="nomertlpmuridm" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="wali_murid" class="form-control" placeholder="Wali Murid" id="wali_muridm" required>
                        </div>
                        <select name="kelas" class="form-control" id="kelasm" required>
                            <option selected="" disabled="" >Kelas</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        <br>
                        <button class="btn btn-primary btn-sm" id="buttonm" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="col-md-9" style="overflow-x:auto;">
            <form action="{{ url ('data_murid/naik')}}" method="post">
                @csrf
                <table id="dataTable" class="table table-hover">
                    <thead>
                        <tr class="center">
                            <th>                                    
                                <input type="checkbox" id="selectAll" /></th>  
                            </th>
                            <th>Delete</th>
                            <th>Update</th>
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
                            <td>
                                <div class="form-group form-check">
                                    <input name="id[]" value="{{$d->id}}" type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>                        
                            </td>
                            <td>
                                <a href="{{ url ('dashboard/data_murid/delete/'.$d->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                            <td>
                                <a href="{{ url ('dashboard/data_murid/edit/'.$d->id) }}"class="btn btn-warning btn-sm" ><i class="fas fa-edit"></i></a>
                            </td>
                            <td>{{$d->nama_murid}}</td>
                            <td>{{$d->NISN}}</td>
                            <td>{{$d->NIS}}</td>
                            <td>{{$d->tempat_lahir}}</td>
                            <td>{{$d->tanggal_lahir}}</td>
                            <td>{{$d->alamat}}</td>
                            <td>{{$d->no_tlp}}</td>
                            <td>{{$d->nama_ortu}}</td>
                            <td>
                                @if($d->kelas == 1)
                                    <span class="badge badge-primary">Kelas 1</span>
                                @elseif($d->kelas == 2)
                                    <span class="badge badge-secondary">Kelas 2</span>
                                @elseif($d->kelas == 3)
                                    <span class="badge badge-success">Kelas 3</span>
                                @elseif($d->kelas == 4)
                                    <span class="badge badge-danger">Kelas 4</span>
                                @elseif($d->kelas == 5)
                                    <span class="badge badge-warning">Kelas 5</span>
                                @elseif($d->kelas == 6)
                                    <span class="badge badge-info">Kelas 6</span>
                                @else
                                    <span class="badge badge-dark">Lulus</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <button type="submit" onclick="return confirm('Pastikan yang anda ceklis benar!')" class="btn btn-primary">Naik Kelas</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $('#selectAll').click(function(e){
    var table= $(e.target).closest('table');
    $('td input:checkbox',table).prop('checked',this.checked);
    });
</script>
@endsection