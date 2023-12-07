@extends('layout')
@section('title' , 'Therapist Notes')
@section('content')

<head>
    <style>h1, h2, p{color: darkblue; font-family: "Georgia";}</style>
    <link rel="icon" href="/img/diamond.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/diamond.ico" type="image/x-icon">
    <style>
        table {
            margin: 0 auto;
            width: 70%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1.5px solid darkblue!important;
            padding: 8px;
            text-align: left;
        }
        .buttonbox{
        border-radius:  10px;
        width: 80%;
        height: auto;
        margin: 20px; /* Add margin for spacing */
        margin: 0 auto;
        margin-bottom: 80px;
        background-color: azure;}

    </style>
</head>

<body>
<!-- Buttonbox height increase -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        adjustButtonBoxHeight(); // Call the function initially

        // Add an event listener for window resize
        window.addEventListener('resize', function () {
            adjustButtonBoxHeight();
        });
    });

    function adjustButtonBoxHeight() {
        const buttonBox = document.querySelector('.buttonbox');
        const table = document.getElementById('myTable');

        if (buttonBox && table) {
            // Calculate the height based on the number of rows in the table
            const numberOfRows = table.rows.length;
            const rowHeight = 40; // Adjust this value based on your design
            const newHeight = numberOfRows * rowHeight;

            // Set the new height to the buttonbox
            buttonBox.style.height = newHeight + 'px';
        }
    }
</script>

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
            <a href = "http://127.0.0.1:8000/therapistprofile">Profile</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/notebook.png" width="30" height="30" alt="nb"></div>
            <a href="http://127.0.0.1:8000/thnotes/create">Notes</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 2.5px;"> <img src="/img/lines.png" width="15" height="15" alt="nb"></div>
            <div class="dropdown">
            <a class="dropbtn">More</a> 
            <div class="dropdown-content">
                <a href="http://127.0.0.1:8000/">Log Out</a>
            </div>
            </div>
        </section>
</div>

<div style="padding: 20px"></div>

<h1 style="text-align: center;">Note Chart</h1> <br> <br> <br>

<!-- Appointment table properties -->



<div class = "buttonbox">
    <table>
        <th>Therapist ID</th>
        <th>Patient ID</th>
        <th>Notes</th>
    @foreach($notes as $note)
        <tr>
            <td>{{$note->ctsUserID}}</td>
            <td>{{$note->cpUserID}}</td>
            <td>{{$note->cNotes}}</td>
        </tr>
    @endforeach
    </table>
</div>

<!-- Button properties -->
<style>
    .eb{
        display: block;
        margin: 0 auto;
        padding: 5px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        border-radius: 10px; /* Adjust the radius to control the roundness */
        background-color: cadetblue; /* Change the background color */
        color: white; /* Change the text color */
        cursor: pointer;
    }
    .eb:hover{
        background-color: #095151!important;
        color: black;
        transition: 0.2s!important;
    }
    .a{
        text-decoration: none;
    }
</style>

<section style="display:flex; gap: 20px; justify-content: center">
<a style = "text-decoration: none" href="http://127.0.0.1:8000/thnotes/create"><button class="eb">Create Another</button></a>
<a><button class="eb">Edit</button></a>
</section>

