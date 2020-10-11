@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div style="text-align:center" class="card-header">Kirim Tugas</div>
                <div style="margin:15px;" class="card-body">
                    <form action="{{url ('kirim-tugas/save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <select class="form-control select2" id="kode" name="kode" required>
                            <option selected="" disabled="" >Judul Tugas</option>
                            @foreach($head as $h)
                            <option value="{{$h->kode_tugas}}">{{$h->judul}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
                    </div>
                    <div style="text-align:center" class="form-group">
                        <input type="file"  name="img" class="form-control" required >
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection