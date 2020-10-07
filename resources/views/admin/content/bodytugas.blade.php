@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Tugas Siswa</h1>
    <ol  class="breadcrumb mb-4" >
        <li class="breadcrumb-item active"><a href="{{ url ('/dashboard/data_tugas') }}" class="btn btn-danger btn-sm">Back</a></li>
    </ol>
    <div class="row">
        <!-- table -->
        <style>
            .thumbnail:hover {
                position:relative;
                top:-25px;
                left:-35px;
                width:500px;
                height:auto;
                display:block;
                z-index:999;
            }
        </style>
        <div class="col-md-12" style="overflow-x:auto;">
            <table id="dataTable" class="table table-hover">
                <thead>
                    <tr class="center">
                        <th>Kode Tugas</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Kirim</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                        <th>Tugas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($open_tugas as $ot)
                    <tr>
                        <td>{{$ot->kode}}</td>
                        <td>{{$ot->siswa->nama_murid}}</td>
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
                            <td><img src="{{ asset('storage/'.$ot->upload) }}" class="thumbnail" height="100" width="100" alt=""></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection