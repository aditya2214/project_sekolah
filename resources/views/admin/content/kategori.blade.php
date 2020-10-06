@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kategori</li>
    </ol>
    <div class="row">
        <!-- input -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"> <p><b>Tambah Kategori</b></p></div>
                <div class="card-body">
                    <form action="{{ url ('dashboard/kategori/save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Kategori" id="">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr class="center">
                        <th>Nama Kategori</th>
                        <th>Di Buat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $k)
                    <tr>
                        <td>{{$k->nama}}</td>
                        <td>{{ date('d-M-Y', strtotime($k->created_at))}}</td>
                        <td>
                            <a href="{{ url('dashboard/kategori/delete/'.$k->id )}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="center">
                        <th>Nama Kategori</th>
                        <th>Di Buat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
            {{ $kategori->links() }}   
        </div>

    </div>
</div>
@endsection