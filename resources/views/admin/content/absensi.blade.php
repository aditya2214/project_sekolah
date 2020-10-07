@extends('admin.master')

@section('content')
<div class="container-fluid text-center">
        <ol  class="breadcrumb mb-4" >
            <p>Kelas</p>
            @foreach($kelas as $k)
            <a style="margin:10px;" class="btn btn-outline-primary">{{$k->kelas}}</a>
            @endforeach   
        </ol>
</div>
@endsection