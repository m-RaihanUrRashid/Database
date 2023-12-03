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

<div>
  <a href="/patientHome"> Raihan: Patient </a><br>
  <a href="/therapistdb"> Gaji: Therapist </a><br>
  <a href="/pharmacyHome"> Okram: Pharmacy </a><br>
  <a href="/psychiatristHome"> Dhora: Psychiatrist </a><br>
  <a href="/rehabSupervisorHome"> Nafiza: Rehab </a><br>
  <a href="/"> Marchel: NGO </a><br>
</div>

<div class= "container square-box d-flex justify-content-center align-items-center">
  <form action="{{route('login.post')}}" method="POST" style = "width:500px; height:100px">
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
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary" style=background-color:cadetblue;>Login</button>
      <div class="ORtext">OR create an account</div>
      <a href = "/signUp">
        <button type="button" class="btn btn-primary signup" style=background-color:cadetblue;>Sign Up</button>
      </a>
  </form>
</div>
@endsection