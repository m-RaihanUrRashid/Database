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

  .submit{
    margin-bottom: 7px;
  }

</style>

<div class= "container square-box d-flex justify-content-center align-items-center">
  <form action="{{route('signUp.post')}}" method="POST" style = "width:500px; height:100px">
  @csrf
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
      <label for="exampleInputEmail1" class="form-label">Full name: </label>
      <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address:</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Set password:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary submit" style=background-color:cadetblue;>Sign Up</button><br>
    <a href = "/login">
      <label for="back">Back>></label>
    </a>
    
  </form>
</div>
@endsection