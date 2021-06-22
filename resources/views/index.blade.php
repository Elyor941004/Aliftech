@extends('layouts.main')
@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
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
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection