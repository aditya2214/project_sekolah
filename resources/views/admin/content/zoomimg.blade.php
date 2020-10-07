@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Tugas Siswa</h1>
    <ol  class="breadcrumb mb-4" >
        <li class="breadcrumb-item active">Tugas Siswa</li>
    </ol>
    <div class="row">
        <!-- table -->
        <div class="col-md-8" style="overflow-x:auto;">
            <table id="dataTable" class="table table-hover">
                <thead>
                    <tr class="center">
                        <th>Kode Tugas</th>
                        <th>Nama Siswa</th>
                        <th>Tugas</th>
                        <th>Tanggal Kirim</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($open_tugas as $ot)
                    <tr>
                        <td>{{$ot->kode}}</td>
                        <td>{{$ot->siswa->nama_murid}}</td>
                        <td><a href="{{ url('dashboard/data_tugas/zoom/'.$ot->upload)}}"><img src="{{ asset('storage/'.$ot->upload) }}" style="width:100px;height:130px;" alt=""></a></td>
                        <td>{{$ot->tgl_upload}}</td>
                        <form action="{{ url('dashboard/data_tugas/berinilai/'.$ot->id) }}" method="post">
                        @csrf
                            @if($ot->nilai_tugas == 0)
                            <td>
                                <input value="" type="number" class="form-control" name="nilai" id="">
                            </td>
                            @else
                            <td>{{$ot->nilai_tugas}}</td>
                            @endif
                            <td>
                                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Pastikan Di Check Terlebih Dahulu!')">Beri Nilai</button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection