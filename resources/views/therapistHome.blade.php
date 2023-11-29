@extends('layout')
@section('title' , 'Therapist Appointment Chart')
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
        <a style= "margin-left: 20px">SALVATIUM</a>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/profile logo inv.png" width="20" height="20" alt="pl"></div>
            <a>Profile</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/notebook.png" width="30" height="30" alt="nb"></div>
            <a>Notes</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/lines.png" width="15" height="15" alt="nb"></div>
            <a>More</a> 
        </section>
</div>

<div style="padding: 20px"></div>

<h1 style="text-align: center;">Appointment Section</h1> <br> <br> <br>

<section style="display: flex; margin-bottom: 5%">
    <p style="font-size: 1.5em; padding-left: 170px; margin-bottom: 0%">Appointment Chart</p>
    <button class="eb">Edit</button>
</section>

<!-- Appointment table properties -->
<style>
    /* Add a border to all cells */
    table{
        width: 80%; /* Set the width of the table */
        height: 400px;
        border-collapse: collapse; /* Collapse the borders */
        margin: 20px; /* Add margin for spacing */
        margin: 0 auto;
        margin-bottom: 80px;
    }
    th, td{
        border: 1.5px solid darkblue;
        border-collapse: collapse; /* Optional, for better styling */
        margin: 0 auto;
    }
    .buttonbox{
        border-radius:  10px;
        width: 80%;
        height: 400px;
        margin: 20px; /* Add margin for spacing */
        margin: 0 auto;
        margin-bottom: 80px;
        background-color: azure;
    }
    th:hover{color:blue; cursor: pointer; transition: 0.2s!important;}
    td:hover{color:blue; cursor: pointer; transition: 0.2s!important;}
</style>

<!-- Appointment table -->
<div class="buttonbox"; style="width: 90%;">
    <table border="2">
    <thead>
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header 3</th>
            <th>Header 4</th>
            <th>Header 5</th>
            <th>Header 6</th>
            <th>Header 7</th>
            <th>Header 8</th>
        </tr>
        
    </thead>
    <tbody>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
            <td>Data 4</td>
            <td>Data 5</td>
            <td>Data 6</td>
            <td>Data 7</td>
            <td>Data 8</td>
        </tr>

        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
            <td>Data 4</td>
            <td>Data 5</td>
            <td>Data 6</td>
            <td>Data 7</td>
            <td>Data 8</td>
        </tr>

        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
            <td>Data 4</td>
            <td>Data 5</td>
            <td>Data 6</td>
            <td>Data 7</td>
            <td>Data 8</td>
        </tr>

        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
            <td>Data 4</td>
            <td>Data 5</td>
            <td>Data 6</td>
            <td>Data 7</td>
            <td>Data 8</td>
        </tr>

        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
            <td>Data 4</td>
            <td>Data 5</td>
            <td>Data 6</td>
            <td>Data 7</td>
            <td>Data 8</td>
        </tr>
    </tbody>
    </table>
</div>

<!-- Edit Button properties -->
<style>
    .eb{
        margin-left: 500px;
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
</style>

</body>

@endsection