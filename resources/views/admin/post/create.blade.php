@extends('layouts.master')

@section('title','Add Post ')

@section('content')

<div class="container-fluid px-4">

<div class="card mt-4">
<div class="card-header">
    <h4> Create POSTS
    <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">ADD POSTS</a>
    </h4>
</div>
<div class="card-body">
    <form action="{{url('admin/add-post')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="mb-3">
       <label for="">Category</label>
       <select name="category_id" class='form-control'>
        @foreach ($category as $cateitem)
        <option value="{{$cateitem->id}}">{{$cateitem->name}}</option>
        @endforeach
       </select>
        </div>
        <div class="mb-3">
            <label for="">Post Name</label>
            <input type="text" name='name' class='form-control'/>
</div>
<div class="mb-3">
            <label for="">Slug</label>
            <input type="text" name='slug' class='form-control'/>
</div>
<div class="mb-3">
            <label for="">Description</label>
            <textarea name='description' class='form-control'rows="4"></textarea>
</div>

<div class="mb-3">
            <label for="">Youtube Iframe Link </label>
            <input type="text" name='yt_iframe' class='form-control'/>
</div>

<div class="mb-3">
            <label for="">Meta Title</label>
            <input type="text" name='meta_title' class='form-control'/>
</div>
<div class="mb-3">
            <label for="">meta Description</label>
            <textarea name="meta_description" class='form-control'rows="3"></textarea>
</div>
<h4>Seo Tags</h4>
<div class="mb-3">
            <label for="">meta keyword</label>
            <textarea name="meta_keyword" class='form-control'rows="3"></textarea>
</div>

<h4>Status</h4>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="">Status</label>
            <input type="checkbox" name='status'>
            </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                <button type="submit" class="btn btn-primary float-end">Save Post</button>
                </div>
            </div>

        
   
</div>
    </form>
</div>
</div>

</div>

@endsection