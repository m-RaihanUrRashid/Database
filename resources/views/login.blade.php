@extends('layout')
@section('title' , 'Login')
@section('content')
<style>
  .square-box {
    max-width: 600px;
    min-height: 400px;
    background-color: white;
  }

  .custom {
    display: flex;
  }

  #bottom{
    display: flex;     /* Create the flex container */
    align-items: flex-end;  /* Align text to the bottom */
  }
</style>
<div class= "container square-box d-flex justify-content-center align-items-center">
  <form style = "width:500px; height:100px">
  <div class = "custom">
    <div> 
      <img src="/img/image.png" width="120" height="100" alt="cry">
    </div>
    <div style= "padding: 0px 0px 0px 10px;"> 
      <div id = "bottom"><h1 style = "font-family:'Serif' "> Mental Health Resources </h1></div>
    </div>
  </div>
  <br>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection