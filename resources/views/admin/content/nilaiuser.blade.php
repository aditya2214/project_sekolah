@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Nilai Siswa</h1>
    <ol  class="breadcrumb mb-4" >
        <li class="breadcrumb-item active">Nilai Siswa</li>
    </ol>
    <div style="overflow-x:auto;">
        <table id="dataTable" class="table table-hover">
            <thead >
                <tr>
                    <th>Nama</th>
                    <th>Nisn</th>
                    <th>No Hp</th>
                    <th>Kelas</th>
                    <th>Kode Tugas</th>
                    <th>Nilai Tugas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_murids as $dm)
                <tr>
                    <td>{{$dm->nama_murid}}</td>
                    <td>{{$dm->NISN}}</td>
                    <td>{{$dm->no_tlp}}</td>
                    <td>{{$dm->kelas}}</td>
                    <td>{{$dm->kode_tugas}}</td>
                    <td>{{$dm->nilai_tugas}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection