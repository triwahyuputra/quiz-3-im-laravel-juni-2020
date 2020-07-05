@extends('layouts.master')

@section('content')
<a href="/artikel/create" class="btn btn-primary m-3">Buat artikel Baru</a>
<table class="table ml-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Tag</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($artikel as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->judul}}</td>
            <td>{{ $item->isi}}</td>
            <td>{{ $item->slug}}</td>
            <td>{{ $item->tag}}</td>
            <td>
                <a href="/artikel/{{$item->id}}" class="btn btn-sm btn-info">Show</a>
                <a href="/artikel/{{$item->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                <form action="/artikel/{{$item->id}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach       
    </tbody>
</table>
@endsection