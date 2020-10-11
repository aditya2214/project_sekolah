@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div style="text-align:center" class="card-header">Absen</div>
                <div style="margin:15px;" class="card-body">
                    <form action="{{url ('kirim-tugas/save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Absen</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection