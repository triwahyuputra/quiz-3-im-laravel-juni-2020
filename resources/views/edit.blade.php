@extends('layouts.master')

@section('content')
<h3 class="ml-3 mt-3">Edit Artikel</h3>
<form action="/artikel/{{$artikel->id}}" method="POST" class="ml-3 mt-3">
    @csrf
    @method('PUT');
    <div class="form-group">
        <label for="judul">Judul:</label>
    <input type="text" class="form-control" value="{{$artikel->judul}}" placeholder="Enter title" name="judul" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi:</label>
        <input type="text" class="form-control" value="{{$artikel->isi}}" placeholder="Enter content" name="isi" id="isi">
    </div>
    <div class="form-group">
        <label for="isi">Tag:</label>
        <input type="text" class="form-control" value="{{$artikel->tag}}" placeholder="Enter tag" name="tag" id="tag">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection