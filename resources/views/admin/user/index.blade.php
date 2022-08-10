@extends('layouts.master')

@section('title','View Users')

@section('content')

<div class="container-fluid px-4">

<div class="card mt-4">
<div class="card-header">
    <h4>VIEW POSTS
 
    </h4>
</div>
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th> Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $item)
            <tr>
                <td>{{$item->id }}</td>
                <td>{{$item->name }}</td>
                <td>{{$item->email }}</td>
                <td>{{$item->role_as  == '1' ? 'Admin':'User' }}</td>
                <td>
                                <a href="{{  url('admin/user/'.$item ->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('admin/users')}}" class="btn btn-danger">Back</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

</div>

@endsection