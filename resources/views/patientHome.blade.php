@extends('layout')
@section('title' , 'Home')
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
        height: 80vh;
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

    <h1>Patient Home</h1>

    <button onclick="makeAppointment()" >Make Appointment</button>
    <button onclick="goToCalendar()" >Check Appointments</button>
</div>

<script>
  function goToCalendar() {
         window.location.href = "/calendar.calendar";
    }

    function makeAppointment() {
        window.location.href = "/makeAppointment";
    }
</script>
@endsection