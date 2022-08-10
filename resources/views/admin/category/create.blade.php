@extends('layouts.master')

@section('title','Category')

@section('content')
<form action=" {{ url('admin/add-category') }}" method='POST' enctype='multipart/form-data'>
<div class="container-fluid px-4">
          
<div class="card mt-4">
    <div class="card-header">
    <h4 class=''>AddCategory</h4>
    </div>
    @csrf
   

    <div class="mb-3">
    <label for="">Category Name</label>
    <input type="text" name="name" class='form-control'>
</div>


<div class="mb-3">
    <label for="">Slug</label>
    <input type="text" name="slug" class='form-control'>
</div>

<div class="mb-3">
    <label for="">Description </label>
    <textarea name="description"  rows="5"class='form-control'></textarea>
</div>


<div class="mb-3">
    <label for="">Image </label>
    <input type="file" name="image" class='form-control'/>
</div>

<div class="mb-3">
    <label for=""> meta_title</label>
    <input type="text" name="meta_title" class='form-control'/>
</div>

<div class="mb-3">
    <label for=""> meta_description</label>
    <textarea  name="meta_description" rows="3" class='form-control'> </textarea>
</div>

<div class="mb-3">
    <label for=""> meta_keyword</label>
    <textarea  name="meta_keyword" rows="3" class='form-control'></textarea>
</div>


<div class="mb-3">
    <label for=""> Status Mode</label>
    <input type="checkbox" name="navbar_status"/>
</div>

<div class="mb-3">
    <label for=""> status</label>
    <input type="checkbox" name="status"/>
    </div>
    


    <div class="col-md-6">
        <button type="submit"class="btn btn-primary">Save Info</button>
    </div>

    </div>
    </div>

</form>
@endsection