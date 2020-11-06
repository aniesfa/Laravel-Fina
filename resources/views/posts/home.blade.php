@extends('layouts.app')

@section('content')
<div class="col-lg-8">
    <div class="card">
            <div class="card-header text-center">
            <h3>Daftar Artikel</h3>
            </div>
            <a href="posts/tambah" class="btn btn-primary">Tambah Data</a>
            </br>
            </br>
            <div class="card body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    
                    <th>Tanggal</th>
                    <th>Body</th>
                    <th colspan="3" style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$a->created_at}}</td>
                    <td>{{$a->body}}</td>
                    <td>
                        <a href="posts/edit/{{ $a->id }}" class="btn btn-outline-primary">Edit</a>
                    <td>
                    <td>
                        <a href="posts/delete/{{ $a->id }}" class="btn btn-outline-danger">Hapus</a>
                    </td>
                </tr>
 @endforeach
 </tbody>
</table>
</div>
</div>
</div>
@endsection
