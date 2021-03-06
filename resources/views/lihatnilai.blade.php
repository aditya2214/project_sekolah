@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div style="text-align:center" class="card-header">Check Nilai</div>
                <div style="margin:15px;" class="card-body">
                    <form action="{{url ('lihat-nilai/check') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nisn" class="form-control" required placeholder="NISN">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Check</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection