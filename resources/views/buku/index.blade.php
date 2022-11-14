@extends('layouts.master')

@section('content')
<header class="container d-flex justify-content-between align-items-center mb-5">
    <p class="display-4 text-center my-auto">List MyKomik</p>
    <a href=" {{ route('buku.create') }} " class="btn btn-primary">Input Komik Baru</a>
</header>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($buku as $b)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td><img src="{{$b->image}}" alt="" class="w-25"></td>
            <td>{{$b->title}}</td>
            <td>{{$b->author}}</td>
            <td>
                <form action="">
                    <a class="btn btn-success" href="">Show</a>
                    <input class="btn btn-danger" type="submit" value="Submit">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection