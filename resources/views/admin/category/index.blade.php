@extends('layouts.master')


@section('title','category')

@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
    <div class="card-header">
<h4>view category
     <a href="{{ url('admin/add-category')}}" class="btn btn-primary btn-sm float-end"> Add category</a> </h4>
</div>
    
    <div class="card-body">


    @if (session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>

                        @endif
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                         <th>Category Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <img src="{{ asset('uploads/category/'.$item->image)}}" width="50px" height="50px"
                                alt="">
                            </td>
                            <td>{{$item->status =='1' ? 'Hidden':'Shown'}}</td>
                            <td>
                                <a href="{{  url('admin/edit-category/'.$item ->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="{{  url('admin/delete-category/'.$item ->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                   </table>     
    </div>
</div>
</div>

@endsection