@extends('layout')
@section('title' , 'Therapist Notes')
@section('content')

<head>
    <style>h1, h2, p{color: darkblue; font-family: "Georgia"; font-size: 1.22em;}</style>
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
            <div style= "padding-top: 6.5px;"> <img src="/img/profile logo inv.png" width="20" height="20" alt="pl"></div>
            <a>Profile</a> 
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

<h1 style="text-align: center;">Notes</h1> <br> <br> <br>

<div style="padding: 20px"></div>

<style>
    form{
        text-align: center;
        font-family: Georgia;
        color: darkblue;
    }
</style>

<form>
    <!-- Input box with a label -->
    <label for="Patient ID">Patient ID</label>
    <input type="text" id="id" name="id" placeholder="Enter ID">

    <label for="notes">Notes</label>
    <input type="text" id="notes" name="notes" placeholder="Enter Notes">
</form>

<style>
    .cbtn{
        display: inline-block;
        margin-left: 440px;
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .cbtn.clicked{
        background-color: lightgreen; /* Change to the desired color */
        color: darkgreen; /* Change to the desired text color */

    }
    .cbtn1{
        display: inline-block;
        margin-left: 10px;
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .cbtn1.clicked{
        background-color: lightcoral; /* Change to the desired color */
        color: maroon; /* Change to the desired text color */
    }

    .cbtn2{
        display: inline-block;
        margin-left: 10px;
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .cbtn2.clicked{
        background-color: lightgoldenrodyellow; /* Change to the desired color */
        color: darkgoldenrod /* Change to the desired text color */
    }

</style>

<script>
function toggleClickedState(button) {
    button.classList.toggle('clicked');
    }
</script>

<p style = "padding-left: 430px">Condition:</p>
<button class="cbtn" onclick="toggleClickedState(this)">Good</button>
<button class="cbtn2" onclick="toggleClickedState(this)">Average</button>
<button class="cbtn1" onclick="toggleClickedState(this)">Bad</button>
</body>