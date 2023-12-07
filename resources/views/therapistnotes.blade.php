@extends('layout')
@section('title' , 'Make Notes')
@section('content')

<head>
    <style>h1, h2, p, li{color: darkblue; font-family: "Georgia"; font-size: 1.22em;}</style>
    <link rel="icon" href="/img/diamond.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/diamond.ico" type="image/x-icon">
</head>


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
            <div style= "padding-top: 6.5px;"> <img src="/img/profile logo inv.png" width="20" height="20" alt="pl"></div>
            <a href="http://127.0.0.1:8000/therapistprofile">Profile</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/appt_logo.png" width="25" height="25" alt="ab"></div>
            <a href="http://127.0.0.1:8000/therapistHome/">Appointment</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/lines.png" width="15" height="15" alt="li"></div>
            <div class="dropdown">
            <a class="dropbtn">More</a> 
            <div class="dropdown-content">
                <a href="http://127.0.0.1:8000/">Log Out</a>
            </div>
            </div>
        </section>
</div> 
<br>

<h1 style="text-align: center;">Notes</h1> <br> <br> <br>

<div style="padding: 20px"></div>

<!-- Form Error Checking -->
<div style="text-align:center">
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
    @endif
</div>

<!-- Form style -->
<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-family: Georgia;
        color: darkblue;
    }

</style>
<!-- Submit Button -->
<style>
    .sbm{
        font-size: 16px;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 10px;
        background-color: cadetblue; /* Change the background color */
        color: white;
        cursor: pointer;
        margin-bottom: 100px;}
</style>


<!-- Form input stuff-->
<form method="post" action="{{route('note.store')}}";>
    @csrf
    @method('post')
    <!-- Input box with a label -->
    <label for="Therapist ID">Therapist ID</label>
    <input type="text" name="ctsUserID" placeholder="Enter Therapist ID" pattern="[0-9]+" title="Please enter only numbers" required><br>

    <label for="Patient ID">Patient ID</label>
    <input type="text" name="cpUserID" placeholder="Enter Patient ID" pattern="[0-9]+" title="Please enter only numbers" required><br>

    <label for="Notes">Notes</label>
    <textarea type="text" name="cNotes" rows="15" cols="40" placeholder="Enter Notes"></textarea> <br>

    <div style = "align-items: center; text-align: center;">
    <input type="submit" value="Create" class="sbm" />
    </div>
</form>



