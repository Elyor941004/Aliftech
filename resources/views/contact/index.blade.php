@extends('layouts.admin')
@section('content')
<div>
  <a type="button" class="btn btn-success" href="{{route('contact.create')}}">Create</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($models as $model)
      <tr>
        <td>{{$model->name}}</td>
        <td>
          @foreach($model->phone as $phone)
          {{$phone.','}}
          @endforeach
        </td>
        <td>
          @foreach($model->email as $email)
          {{$email.','}}
          @endforeach
        </td>
        <td><a href="{{route('contact.edit', $model->id)}}" class="btn btn-success" type="button">update</a> 
          <form method="post" action="{{route('contact.destroy', $model->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection