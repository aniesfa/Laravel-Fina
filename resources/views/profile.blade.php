@extends('layout.master')

@section('content')
    <div class="col-lg-8">
        <h1 class="my-4">Profile {{$data->name}}</h1>
    </div>
    <div class="col-lg-8">
        <h3 class="my-4">Nama {{$data->name}}</h3>
        <h3 class="my-4">Email {{$data->email}}</h3>
        <h3 class="my-4">Role {{$data->roles}}</h3>
        <h3 class="my-4">
        Image Profile <img src="{{ Storage::path($data->images)}}">
        </h3>
        <h3><form action="{{ url('update_image_profile/'.$data->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="file" required name="images">
<input type="submit" value="Update">
</form></h3>
    </div>
@endsection