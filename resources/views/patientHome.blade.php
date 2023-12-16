@extends('layout')
@section('title' , 'Patient Home')
@section('content')

<style>
    .buttonBox{
        border-radius:  10px;
        height: 80px;
        margin: 20px;
        display: table;
        background: white;
    }

    .container1{
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    button {
        padding: 10px 20px;
        font-size: 16px;
        margin: 5px;
        cursor: pointer;
    }

    @media screen and (min-width: 600px) {
        h1 {
            font-size: 36px;
            align-items: center;
        }

        button {
            font-size: 18px;
        }
    }
</style>



<div class="container1">

    <h1>Welcome, Patient!</h1>
    


    @if(session()->has('error'))
        <div class="alert alert-danger" role="alert"> 
            {{session('error')}}
        </div>
    @endif

    <button onclick="makeAppointment()" >Make Appointment</button>
    <button onclick="goToCalendar()" >Check Appointments</button>
    <button onclick="admitRehab()" >Admit to Rehab</button>
    <button onclick="reviewSpec()" >Review Specialist</button>
    <button onclick="viewProfile()" >View Profile</button>
    <button onclick="logOut()" >Log Out</button>


</div>

<script>
  function goToCalendar() {
         window.location.href = "/patientCheckApp";
    }

    function makeAppointment() {
        window.location.href = "/patientMakeApp";
    }

    function admitRehab() {
        window.location.href = "/patientChoseRehab";
    }

    function reviewSpec() {
        window.location.href = "/patientReviewSpec";
    }

    function viewProfile() {
        window.location.href = "/patientProfile ";
    }

    function logOut() {
        window.location.href = "/";
    }
</script>
@endsection