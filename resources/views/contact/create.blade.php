@extends('layouts.admin')
@section('content')
<form action="{{route('contact.store')}}" method="post">
    @csrf
    @if($errors->any())
    <div class="alert alert-danger">
      <ul style="list-style: none">
        @foreach($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  @endif
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="integer" class="form-control" id="phone" placeholder="Enter phone" name="phone[]"><br>
      <input type="integer" class="form-control" id="phone" placeholder="Enter phone" name="phone[]"><br>
      <input type="integer" class="form-control" id="phone" placeholder="Enter phone" name="phone[]">
    </div>
    <div class="form-group">
      <label for="email">Phone:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]"><br>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]"><br>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email[]">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection
