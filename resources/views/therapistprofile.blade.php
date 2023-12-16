@extends('layout')
@section('title' , 'Therapist Profile')
@section('content')

<head>
    <style>h1, h2, p{
                color: darkblue;
                font-family: "Georgia"; 
                font-size: 1.22em; 
                text-align: center;
            }
            input{
                margin-bottom: 30px;
            }
            div{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin: 0;
            }
    </style>
    <link rel="icon" href="/img/diamond.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/diamond.ico" type="image/x-icon">
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

<!--Navbar Overflow Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById('navbar');

        navbar.addEventListener('mouseenter', function () {
            navbar.style.overflow = 'visible';
        });

        navbar.addEventListener('mouseleave', function () {
            navbar.style.overflow = 'hidden';
        });
    });
</script>



<!-- Dropdown aesthetics -->
<style>
    .dropdown {
        display: inline-block;
        position: relative;
    }

    .dropbtn {
        font-family: 'Georgia';
        text-decoration: none;
        color: white;
        padding: 5px;
        margin: 5px;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: navy;
        min-width: 100px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        right: 0;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        z-index: 1;
    }

    .dropdown-content a:hover {
        background-color: navy;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: navy; /* Change to the desired hover color */
        color: white; /* Change to the desired text color */
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
        <a style= "margin-left: 20px" href="http://127.0.0.1:8000/therapistdb">HOME</a>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/notebook.png" width="30" height="30" alt="nb"></div>
            <a href="http://127.0.0.1:8000/thnotes/create">Notes</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/appt_logo.png" width="25" height="25" alt="ab"></div>
            <a href="http://127.0.0.1:8000/therapistHome/">Appointment</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 4.5px;"> <img src="/img/lines.png" width="15" height="15" alt="li"></div>
            <div class="dropdown">
            <a class="dropbtn">More</a> 
            <div class="dropdown-content">
                <a href="http://127.0.0.1:8000/">Log Out</a>
            </div>
            </div> 
        </section>
</div> 
<br>

<h1>Your Profile</h1> <br>

<!-- Base Profile Logo Style -->
<style>
    .c{
        border-radius: 50%; /* Set border-radius to 50% for a circular shape */
        overflow: hidden; /* Hide the overflow for a perfect circle */
        width: 250px; /* Adjust the width as needed */
        height: 250px; /* Adjust the height as needed */
        border: 2px solid black; /* Border style and color */
        opacity: 0.4;
        justify-content: center;
        align-items: center;
    }
</style>

<div class = "c"; style = "text-align: center; margin: auto; opacity: 0.4">
    <img src="/img/person.png" width="220px" height="220px" alt="person">
</div>
<br>

<div>
<p>User ID: {{ $therapistData->ctsUserID }}</p>
<p>Name: {{ $therapistData->cFname }} {{ $therapistData->cLname }}</p>
<p>Email: {{ $therapistData->cEmail }}</p>
<p>Type: {{ $therapistData->cType }}</p>
<p>Experience: {{ $therapistData->cExperience }}</p>
<p>cSpeciality: {{ $therapistData->cSpeciality }}</p>
</div>
