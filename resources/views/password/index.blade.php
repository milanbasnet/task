<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('change.password')}}" method="post">
        @csrf

        <div class="form-group">
          <label for="exampleInputPassword1">Enter your Password</label>
          <input type="password" name="current_password" class="form-control" id="exampleInputPassword1"
           placeholder="Enter existing Password">
           @error('current_password')
           <div class="alert alert-danger">
               {{$message}}
           </div>
       @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">New Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" 
          placeholder="Enter new Password">
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
        <button type="submit" class="btn btn-primary">Confirm</button>
      </form>
</body>
</html>