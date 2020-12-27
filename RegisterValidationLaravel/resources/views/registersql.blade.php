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
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-primary"> Register page</h1>
<br/>

<div class="col-sm-12">
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<form method="post" action="/registertable">
@csrf
  <div class="form-group">
    <label for="UserName">Username</label>
    <input type="text" class="form-control" id="email" name="fullname" value="{{old('fullname')}}">
  </div>
  @error('fullname')
          <div>
            <p style="color: red;font-size:1rem">{{$message}}</p>
          </div>
          @enderror
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
  </div>
  @error('email')
          <div>
            <p style="color: red;font-size:1rem">{{$message}}</p>
          </div>
          @enderror

  <div class="form-group">
    <label for="UserName">Mobile:</label>
    <input type="text" class="form-control" id="email" name="mobile" value="{{old('mobile')}}">
  </div>
  @error('mobile')
          <div>
            <p style="color: red;font-size:1rem">{{$message}}</p>
          </div>
          @enderror

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control"  name="password" value="{{old('password')}}">
  </div>
  @error('password')
          <div>
            <p style="color: red;font-size:1rem">{{$message}}</p>
          </div>
          @enderror

  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" name="password_confirmation">
  </div>
  @error('password_confirmation')
          <div>
            <p style="color: red;font-size:1rem">{{$message}}</p>
          </div>
          @enderror


  <button type="submit" class="btn btn-default btn-lg btn-primary">Submit</button>
  

</form>
<br/>

    </div>

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
    </tr>
    @endforeach
  </tbody>
</table>
@endif
   </div>
  </div>
</div>
</div>
<!-- This design is created by manoj chauhan  -->
</body>
</html>
