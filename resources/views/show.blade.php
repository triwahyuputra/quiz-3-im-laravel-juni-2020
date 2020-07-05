@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <h3>Detail</h3>
    <ul class="list-group">
        <li class="list-group-item">Judul: {{$artikel->judul}} </li>
        <li class="list-group-item">Isi: {{$artikel->isi}}</li>
        <li class="list-group-item">Slug: {{$artikel->slug}}</li>
        <li class="list-group-item">Tag: {{$artikel->tag}}</li>
    </ul>
</div>
@endsection