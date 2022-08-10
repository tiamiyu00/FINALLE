@extends('layouts.master')

@section('title', 'Category')

@section('content')
<form action=" {{ url('admin/update-category/'.$category->id) }}" method='POST' enctype='multipart/form-data'>
<div class="container-fluid px-4">
@csrf
@method('PUT')

<div class="card mt-4">
    <div class="card-header">
    <h4 class=''>Edit Post</h4>
    </div>
    
   

    <div class="mb-3">
    <label for="">Category Name</label>
    <input type="text" name="name"  value="{{$category->name}}"class='form-control'>
</div>


<div class="mb-3">
    <label for="">Slug</label>
    <input type="text" name="slug"  value="{{$category->slug}}" class='form-control'>
</div>

<div class="mb-3">
    <label for="">Description </label>
    <textarea name="description"  rows="5"class='form-control'>{{$category->description}}</textarea>
</div>


<div class="mb-3">
    <label for="">Image </label>
    <input type="file" name="image" class='form-control'/>
</div>

<div class="mb-3">
    <label for=""> meta_title</label>
    <input type="text" name="meta_title" value="{{$category->meta_title}}" class='form-control'/>
</div>

<div class="mb-3">
    <label for=""> meta_description</label>
    <textarea  name="meta_description" rows="3" class='form-control'>{{$category->meta_description}} </textarea>
</div>

<div class="mb-3">
    <label for=""> meta_keyword</label>
    <textarea  name="meta_keyword" rows="3" class='form-control'>{{$category->meta_keyword}}</textarea>
</div>


<div class="mb-3">
    <label for=""> Status Mode</label>
    <input type="checkbox"  name="navbar_status" {{$category->navbar_status =='1'?'checked':''}} />
</div>

<div class="mb-3">
    <label for=""> status</label>
    <input type="checkbox"  name="status" {{$category->status =='1'?'checked':''}}/>
    </div>
    


    <div class="col-md-6">
        <button type="submit"class="btn btn-primary">update Info</button>
    </div>

    </div>
    </div>

</form>
@endsection