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
        <a style= "margin-left: 20px" href="http://127.0.0.1:8000/therapistdb">HOME</a>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/notebook.png" width="30" height="30" alt="nb"></div>
            <a href="http://127.0.0.1:8000/therapistnotes">Notes</a> 
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
<p>ID: 003300</p>
<p>Name: Gazi Muhammad Mobasher</p>
<p>Location: Dhanmondi 4 Number Road</p>
<p>Email: 2221407@iub.edu.bd</p>
</div>
