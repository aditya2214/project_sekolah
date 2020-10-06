@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Data Murid</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Murid</li>
    </ol>
    <div class="row">
        <!-- input -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"> <p><b>Tambah Data Murid</b></p></div>
                <div class="card-body">
                    <form action="{{ url ('dashboard/data_murid/save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="namamurid" class="form-control" placeholder="Nama Murid" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamatmurid" class="form-control" placeholder="Alamat Murid" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nomertlpmurid" class="form-control" placeholder="Nomor Telpon" id="">
                        </div>
                        <div class="form-group">
                            <small>Buat Akun?   </small>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email Murid" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Password" id="">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="col-md-8">
            <table id="data-murid" class="table table-hover">
                <thead>
                    <tr class="center">
                        <th>Email</th>
                        <th>Password</th>
                        <th>dibuat</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(function() {
        $('#data-murid').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{url ('/dashboard/data_murid/api')}}",
            columns: [
                {data: 'email',name: 'email'},
                {data: 'password',name: 'password'},
                {data: 'created_at',name: 'created_at'}
            ]
        });
    });
</script>
@endsection