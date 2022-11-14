@extends('layouts.master')

<div class="m-5">
    <h1>Input Komik baru</h1>

    <form action="{{route('buku.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" id="" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" id="" name="author">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" id="" name="description">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="url" class="form-control" id="" name="image">
        </div>
        <!-- <div class="mb-3">
            <label class="form-label">Created At</label>
            <input type="text" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label class="form-label">User ID</label>
            <input type="text" class="form-control" id="">
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>