@extends('welcome')
@section('content')
    
<div>
    <h1>Users</h1>
    <?php
    $i=1;
    ?>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">Id</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $i=1; 
            ?>
         @foreach ($users as $item)
         <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->id}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td class="col-xs-3">
                <a style="margin-right:20px" href="{{route('user.edit',['id'=> $item->id])}}">Edit</a>
                <a style="margin-right:5px" href="{{route('user.delete',['id'=>$item->id])}}">Delete</a>
            </td>
          </tr>
          <?php
          $i++;
          ?>
         @endforeach
          
        </tbody>
      </table>
    
</div>
@endsection