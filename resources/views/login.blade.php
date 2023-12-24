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

  .signup {
    margin-top: 5px;
  }

  body {
    background: hsl(220deg, 10%, 97%);
    margin: 0;
    padding: 0;
  }

  .buttons-container {
    width: 100%;
    height: 100vh;
    display: flex;
    /*align-items: center;*/
    justify-content: center;
  }

  button {
    background: white;
    border: solid 2px black;
    padding: .375em 1.125em;
    font-size: 1rem;
  }

  .button-arounder {
    font-size: 16px;
    background: hsl(190deg, 30%, 15%);
    color: hsl(190deg, 10%, 95%);

    box-shadow: 0 0px 0px hsla(190deg, 15%, 5%, .2);
    transform: translateY(0);
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;

    --dur: .15s;
    --delay: .15s;
    --radius: 16px;

    transition:
      border-top-left-radius var(--dur) var(--delay) ease-out,
      border-top-right-radius var(--dur) calc(var(--delay) * 2) ease-out,
      border-bottom-right-radius var(--dur) calc(var(--delay) * 3) ease-out,
      border-bottom-left-radius var(--dur) calc(var(--delay) * 4) ease-out,
      box-shadow calc(var(--dur) * 4) ease-out,
      transform calc(var(--dur) * 4) ease-out,
      background calc(var(--dur) * 4) steps(4, jump-end);
  }

  .button-arounder:hover,
  .button-arounder:focus {
    box-shadow: 0 4px 8px hsla(190deg, 15%, 5%, .2);
    transform: translateY(-4px);
    background: hsl(230deg, 50%, 45%);
    border-top-left-radius: var(--radius);
    border-top-right-radius: var(--radius);
    border-bottom-left-radius: var(--radius);
    border-bottom-right-radius: var(--radius);
  }
</style>

<!-- <div style="position: absolute; ">

  <a href="/patientHome"> Raihan: Patient </a><br>
  <a href="/therapistdb"> Gaji: Therapist </a><br>
  <a href="/pharmacyHome"> Okram: Pharmacy </a><br>
  <a href="/psychiatristHome"> Dhora: Psychiatrist </a><br>
  <a href="/ngo"> Marchel: NGO </a><br>

  <div class="buttons-container">
    <a href="/rehabSupervisorHome"><button class="button-arounder">Nafiza: Rehab</button></a><br>
  </div>
</div> -->

<div class="container square-box d-flex justify-content-center align-items-center">

  <form action="{{route('login.post')}}" method="POST" style="width:500px; height:100px">
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
    <br>
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
    </div>
    @endif
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary" style=background-color:cadetblue;>Login</button>
    <br><br>
    <div class="ORtext">OR create an account</div>
    <a href="/signUp">
      <button type="button" class="btn btn-primary signup" style=background-color:cadetblue;>Sign Up</button>
    </a>
  </form>
</div>
@endsection