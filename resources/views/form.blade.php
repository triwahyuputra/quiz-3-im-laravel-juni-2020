@extends('layouts.master')

@section('content')
<h3 class="ml-3 mt-3">Buat Artikel</h3>
<form action="/artikel" method="POST" class="ml-3 mt-3">
    @csrf
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" placeholder="Enter title" name="judul" id="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi:</label>
        <input type="text" class="form-control" placeholder="Enter content" name="isi" id="isi">
    </div>
    <div class="form-group">
        <label for="tag">Tag:</label>
        <input type="text" class="form-control" placeholder="Enter tag" name="tag" id="tag">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection