
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
    <form action="{{route('register')}}" method="post">
        @csrf
        @if(session('message'))
        <div class="">
        {{session('message')}}
        </div>
    @endif 
        <div class="form-group">
          <label for="exampleInputEmail1">Full Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
           placeholder="Enter Your Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
          placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Phone</label>
          <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
           placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
           placeholder=" Confirm Password">
           @error('password_confirmation')
           <div class="alert alert-danger">
               {{$message}}
           </div>
       @enderror
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
</body>
</html>