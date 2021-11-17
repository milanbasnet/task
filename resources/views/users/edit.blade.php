@extends('welcome')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration</title>
</head>

<body>
  <form action="{{route('user.update', ['id'=>$userData->id])}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Full Name</label>
      <input type="text" value="{{$userData->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
      @error('name')
      <div class="alert alert-danger">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" value="{{$userData->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      @error('email')
      <div class="alert alert-danger">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Phone</label>
      <input type="tel" value="{{$userData->phone}}" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number">
      @error('phone')
      <div class="alert alert-danger">
        {{$message}}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</body>

</html>
@endsection