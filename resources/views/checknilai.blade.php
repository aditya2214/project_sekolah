@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">Tugas</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tugas</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($semua_body as $body)
                        <tr>
                            <td>{{$body->tugas->judul}}</td>
                            @if($body->nilai_tugas == 0)
                            <td>Belum Dinilai</td>
                            @else
                            <td>{{$body->nilai_tugas}}</td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $semua_body->links() }}
            </div>
        </div>
    </div>
</div>
@endsection