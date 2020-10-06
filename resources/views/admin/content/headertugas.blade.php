@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Header Tugas</h1>
    <ol  class="breadcrumb mb-4" >
        <li class="breadcrumb-item active">Header Tugas</li>
    </ol>
    <div class="row">
        <!-- input -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"> <p><b>Buat Tugas</b></p></div>
                <div class="card-body">
                    <form action="{{ url ('dashboard/data_tugas/save') }}" method="post">
                        @csrf
                        <div class="form-group">
                        <select name="kelas" class="form-control" id="" required>
                            <option selected="" disabled="" >Kelas</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="judul" class="form-control" placeholder="Judul Tugas" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Terakhir Dikumpulkan</label>
                            <input type="date" name="dikumpulkan" class="form-control" placeholder="Terakhir Dikumpulkan" id="" required>
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
                        <th>Kode Tugas</th>
                        <th>Kelas</th>
                        <th>Judul Tugas</th>
                        <th>Terakhir Dikumpulka</th>
                        <th>Dibuat Oleh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($header_tugas as $ht)
                    <tr>
                        <td>{{$ht->kode_tugas}}</td>
                        <td>{{$ht->kelas}}</td>
                        <td>{{$ht->judul}}</td>
                        <td>{{$ht->dikumpulkan}}</td>
                        <td>{{$ht->user->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection