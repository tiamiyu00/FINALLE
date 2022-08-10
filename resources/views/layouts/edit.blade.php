@extends('layout.app')
@section('title','edit')
@section('content')
<div class="row" style="margin-top:28px">
    <div class="col-lg-12">
        <div class="pull-left" style="font-size:25px">
            <h1>Congratulations!!! You Have Successfully Placed Your Order</h1>
        </div>
        <div class="pull-right">
            <a href="{{('/')}}" class="btn btn-success">Go back</a>
           
        </div>
    </div>
</div>
  <div>
    @if ($errors->any())
     <div class="alert alert-danger">
       <ul>
         <div><strong>woops!!!</strong> something is wrong with your input.they are listed below</div>
         @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
       </ul>
     </div>
    @endif
    @include('layout.notification')
  </div>

<form  action="{{'/edit'}}" method='POST' enctype='multipart/form-data'>
    @csrf
  <div class="form-group">
    <label for="title">title</label>
    <input type ='hidden' name='id' value='{{$data->id}}'>
    <input type="text" class="form-control" id="title" value="{{$data->title}}" name="title" placeholder="enter title">
</div>

  <div class="form-group">
    <label for="description" >description</label>
    <textarea name="description" id="description" cols="30" rows="10" value="{{$data->description}}"  class="form-control" title="Enter description"> {{$data->description}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">update</button>
</form>

@endsection



