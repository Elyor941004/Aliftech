@extends('layouts.admin')
@section('content')
<form action="{{route('contact.update', $model->id)}}" method="post">
   @if($errors->any())
    <div class="alert alert-danger">
      <ul  style="list-style: none">
        @foreach($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  @endif
  @method('PUT')
  @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$model->name}}">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="integer" class="form-control" id="phone" placeholder="Enter phone" name="phone[]" value="{{$model->phone[0]}}">
      <input type="integer" class="form-control" id="phone" placeholder="Enter phone" name="phone[]" value="{{$model->phone[1]}}">
      <input type="integer" class="form-control" id="phone" placeholder="Enter phone" name="phone[]" value="{{$model->phone[2]}}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]" value="{{$model->email[0]}}">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]" value="{{$model->email[1]}}">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]" value="{{$model->email[2]}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection