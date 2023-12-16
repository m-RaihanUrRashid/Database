@extends('layout')
@section('title' , 'Past Appointments')
@section('content')

<head>
    <style>h1, h2, p{color: darkblue; font-family: "Georgia";}</style>
</head>

<body>
<!-- Navbar aesthetic properties -->
<style>
    .navbar {
    background-color: navy;
    padding: 15px;
    color: white;
    text-align: center;
    transition: 0.3s; /* Add smooth transition effect */
    overflow: hidden;
    }

    .navbar a{
        font-family: 'Georgia';
        text-decoration: none;
        color: white;
        padding: 5px;
        margin: 5px;
    }
    .navbar a:hover{
        color: blue!important; cursor: pointer!important; transition: 0.2s!important;
        text-decoration: none;
    }
    .navb{
        width: 2px; /* Adjust border width */
        height: 100%; /* Adjust border height */
        background-color: black; /* Adjust border color */
    }
</style>

<!-- Navbar script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');

    document.addEventListener('mousemove', function(e) {
        // Check if the cursor is outside the navbar
        if (!navbar.contains(e.target)) {
            navbar.style.height = '0';
        } else {
            navbar.style.height = '70px';
        }
        });
    });
</script>

<!-- Navbar -->
<div class="navbar" id="navbar">
        <a style= "margin-left: 20px">ASSYLUM</a>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/profile logo inv.png" width="20" height="20" alt="pl"></div>
            <a href = "http://127.0.0.1:8000/therapistprofile">Profile</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/appt_logo.png" width="25" height="25" alt="ab"></div>
            <a href="http://127.0.0.1:8000/therapistHome/">Appointment</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/lines.png" width="15" height="15" alt="li"></div>
            <a>More</a> 
        </section>
</div> <br>

<h1 style="text-align: center; color: darkblue">Past Appointments</h1> <br> <br>

<style>
    /* Add a border to all cells */
    table{
        width: 80%; /* Set the width of the table */
        border-collapse: collapse; /* Collapse the borders */
        margin: 20px; /* Add margin for spacing */
        margin: 0 auto;
        margin-bottom: 80px;
    }
    th, td{
        border: 1.5px solid darkblue!important;
        border-collapse: collapse; /* Optional, for better styling */
        margin: 0 auto;}
    td{
        padding-left: 20px;
    }
    
    .buttonbox{
        border-radius:  10px;
        width: 80%;
        margin: 20px; /* Add margin for spacing */
        margin: 0 auto;
        margin-bottom: 80px;
        background-color: azure;
    }
    .buttonbox, table{
        height: 70px;
    }

</style>

<!-- Past Appointment table -->
<div class="buttonbox"; style="width: 95%;">
    <table id="prescriptionsTable" style="width: 70%; table-layout: fixed; border-collapse: collapse;">
        <thead style="background-color: #3498db; color: #fff; border-bottom: 2px solid lightblue;">
            <tr>
                <th style="padding: 6px;">Patient ID</th>
                <th style="padding: 6px;">psych ID</th>
                <th style="padding: 6px;">Date</th>
                <th style="padding: 6px;">Time</th>
            </tr>
        </thead>
    <tbody>
        @foreach($appointments as $appointment)
        <tr>
            <td>{{ $appointment->cpUserID }}</td>
            <td>{{ $appointment->csUserID }}</td>
            <td>{{ $appointment->dappDate }}</td>
            <td>{{ $appointment->cappTime }}</td>
        </tr>
        @endforeach
    </tbody>    
    </table>
</div>
