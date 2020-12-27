<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
  
body{
  background-image: url(https://images.unsplash.com/photo-1531171047414-9f2cdc733755?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
  background-repeat: no-repeat;
  background-size: 100% 100%;
}


</style>



</head>
<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
  
<h1 class="text-center text-primary"> Employee Table</h1>


<br>

<!--@if(isset($input))

@foreach($input as $key => $value)

@if($key != "_token")
{{$key}} => {{$value}}
<br>
@endif

@endforeach


@endif-->
@if(isset($all_employee))
<table class="table table-dark table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($all_employee as $key => $input)
    <tr>
    <th scope="row">{{$input['userid']}}</th>
      <th scope="row">{{$input['fullname']}}</th>
      <td>{{$input['email']}}</td>
      <td>{{$input['mobile']}}</td>
      <td>{{$input['password']}}</td>
      <td><a href="registertable/{{$input['userid']}}"><button type="button" class="btn btn-danger">delete</button></a></td>
      <td><a href="edit/{{$input['userid']}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endif
  
<!-- This design is created by manoj chauhan  -->
</body>
</html>
