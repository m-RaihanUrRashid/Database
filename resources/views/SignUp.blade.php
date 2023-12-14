@extends('layout')
@section('title' , 'SignUp')
@section('content')

<style>
  .parent {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;

  }

  .square-box {
    max-width: 600px;
    min-height: 100px;
    background-color: lightblue;
    margin-top: 50px;
  }

  .custom {
    display: flex;
  }

  .signup {
    margin-top: 5px;
  }

  .submit {
    margin-bottom: 7px;
  }
</style>

<div class="container square-box d-flex justify-content-center align-items-center">
  <form action="{{route('signUp.post')}}" method="POST" style="width:500px; height:100px">
    @csrf
    <div class="custom">
      <div>
        <img src="/img/image.png" width="120" height="100" alt="cry">
      </div>
      <div style="padding: 0px 0px 0px 100px;">
        <div id="bottom">
          <h1 style="font-family:'Serif' "> Mental Health Resources </h1>
        </div>
      </div>
    </div>
</div>
<br>
<div class="parent">
  <div style="margin: 30px; width: 300px;">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Fist name: </label>
      <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp" name="fname">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Date of Birth:</label>
      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="DOB">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">General Area:</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" name="g_area">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email address:</label>
      <input type="email" class="form-control" id="exampleInputPassword1" name="email">
    </div>
  </div>
  <div style="margin: 30px; width: 300px;">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Last name: </label>
      <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp" name="lname">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Gender:</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" name="gender">
    </div>
    <div class="mb-3">
      <label class="form-label">Address:</label>
      <input type="text" class="form-control" name="address">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Set password:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
  </div>
</div>
<div class="align-items-center">
  <div class="d-flex justify-content-center align-items-center">
    <label class="form-label">Medical History:</label>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <textarea name="mHistory" cols="80" rows="5" style="border-radius: 7px; resize: none;"></textarea>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <button type="submit" class="btn btn-primary submit" style="background-color:cadetblue; margin: 10px;">Sign Up</button>
    <a href="/"><button type="button" class="btn btn-primary submit" style="background-color:cadetblue; margin: 10px;">Back to Login</button></a><br>
  </div>
</div>
</form>
</div>
@endsection