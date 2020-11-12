@extends('layout.master')

@section('content')
<div class="col-lg-8">
    <div class="card">
            <div class="card-header text-center">
            <h3>Daftar Artikel</h3>
            </div>
            <a href="article/tambah" class="btn btn-primary">Tambah Data</a>
            </br>
            </br>
            <div class="card body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th colspan="3" style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($article as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$a->created_at}}</td>
                    <td>
                        <a href="article/edit/{{ $a->id }}" class="badge badgewarning">Edit</a>
                    <td>
                    <td>
                        <a href="article/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a>
                    </td>
<<<<<<< HEAD
                    </td>
                    <a href="/article/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                    </td>
=======
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
                </tr>
 @endforeach
 </tbody>
</table>
</div>
</div>
</div>
@endsection