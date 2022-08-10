@extends('layouts.master')

@section('title','Edit Post ')

@section('content')

<div class="container-fluid px-4">

<div class="card mt-4">
<div class="card-header">
    <h4> Edit Posts
    <a href="{{url('admin/posts')}}" class="btn btn-danger float-end">ADD POSTS</a>
    </h4>
</div>
<div class="card-body">
    <form action="{{url('admin/update-post/'.$post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
       <label for="">Category</label>
       <select name="category_id" class='form-control'>
        <option value="">--Select Category--</option>
        @foreach ($category as $cateitem)
        <option value="{{$cateitem->id}}" {{$post->category_id == $cateitem->id ? 'selected':''}}>
            {{$cateitem->name}}</option>
        @endforeach
       </select>
        </div>
        <div class="mb-3">
            <label for="">Post Name</label>
            <input type="text" name='name' value='{{$post->name}}' class='form-control'/>
</div>
<div class="mb-3">
            <label for="">Slug</label>
            <input type="text" name='slug'  value='{{$post->slug}}' class='form-control'/>
</div>
<div class="mb-3">
            <label for="">Description</label>
            <textarea name='description' class='form-control'rows="4"> {!!$post->description!!}</textarea>
</div>

<div class="mb-3">
            <label for="">Youtube Iframe Link </label>
            <input type="text" name='yt_iframe'  value='{{$post->yt_iframe}}'class='form-control'/>
</div>

<div class="mb-3">
            <label for="">Meta Title</label>
            <input type="text" name='meta_title' value='{{$post->meta_title}}' class='form-control'/>
</div>
<div class="mb-3">
            <label for="">meta Description</label>
            <textarea name="meta_description"  class='form-control'rows="3">{!!$post->meta_description!!}</textarea>
</div>
<h4>Seo Tags</h4>
<div class="mb-3">
            <label for="">meta keyword</label>
            <textarea name="meta_keyword" class='form-control'rows="3"> {!!$post->meta_keyword!!}</textarea>
</div>

<h4>Status</h4>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="">Status</label>
            <input type="checkbox" name='status' {{$post->status == '1' ? 'checked':''}}/>
            </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                <button type="submit" class="btn btn-primary float-end">Update Post</button>
                </div>
            </div>

        
   
</div>
    </form>
</div>
</div>

</div>

@endsection