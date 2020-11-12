@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="login" method="POST" action="/store">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan judul">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <select class="form-control" id="author" name="author">
                @foreach ($posts as $item)
                    <option value="{{$item->author}}">{{$item->author}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="body">Example textarea</label>
                <textarea class="form-control" name="body" id="body" rows="6" placeholder="isi artikel mu disini"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Create</button>
        </form>
    </div>
   
@endsection