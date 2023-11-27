@extends('layout')
@section('title' , 'Login')
@section('content')

<style>
  .square-box {
    max-width: 600px;
    min-height: 250px;
    background-color: lightblue;
  }

  .custom {
    display: flex;
  }
  
  .signup{
    margin-top: 5px;
  }

</style>

<div class= "container square-box d-flex justify-content-center align-items-center">
  <form style = "width:500px; height:100px">
  <div class = "custom">
    <div> 
      <img src="/img/image.png" width="120" height="100" alt="cry">
    </div>
    <div style= "padding: 0px 0px 0px 100px;"> 
      <div id = "bottom"><h1 style = "font-family:'Serif' "> Mental Health Resources </h1></div>
    </div>
  </div>
  <br>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Full Name: </label>
      <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address:</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Set Password:</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary" style=background-color:cadetblue;>Sign Up</button>
  </form>
</div>
@endsection