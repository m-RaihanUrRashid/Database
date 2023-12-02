@extends('layout')
@section('title' , 'Home')
@section('content')

<style>

    .parent{
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
        /* Style the scrollable div */
    .scrollable-div {
        width: 300px;
        height: 200px;
        overflow: auto; /* Make the div scrollable */
        border: 1px solid #ccc;
        padding: 10px;
        background-color: white;
    }

    /* Style the big button */
    .big-button {
        display: inline-block;
        padding: 20px 40px;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Change background color on hover */
    .big-button:hover {
        background-color: #45a049;
    }


    button{

    }

    .clickable-row:hover {
        background-color: red; 
        cursor: pointer;
    }

    .clickable-row.selected {
        background-color: #c0c0c0;
    }

    .table-hover tbody tr:hover td {
        background: #E6F7FF;
    }

    .table-hover tbody tr.selected td {
        background: #3498db;
        
    }
</style>
    <?php
    /*<div class="parent">
        <div class="scrollable-div">
                <button class="big-button">Mohammed</button>
        </div>
    </div>*/
    ?>

<div class="parent">
    <div>
        <h4>Chose a Specialist with your preferred appointment time:</h4><br>
    </div>
    <table class="table table-hover" id="prescriptionsTable" style="width: 70%; table-layout: fixed; border-collapse: collapse;">
        <thead style="background-color: #3366CC; color: #fff; border-bottom: 2px solid lightblue;">
            <tr >
                <th style="padding: 6px;">Specialist ID</th>
                <th style="padding: 6px;">Name</th>
                <th style="padding: 6px;">Type</th>
                <th style="padding: 6px;">Free Appointments</th>
                <th style="padding: 6px;">Location</th>
                <th style="padding: 6px;">Speciality</th>
               
            </tr>
        </thead>
        <tbody>
            <tr class="clickable-row" onclick="markAsDone(1)" style="margin: 10px; background-color: #fff; border-bottom: 1px solid lightgrey;">
                <td>1234</td>
                <td>Md Gazi</td>
                <td>Therapist</td>
                <td>9:40 - 11:10<br> 19:20 - 21:30</td>
                <td> Address</td>
                <td>Depression<br> Anxiety disorders</td>

                
            </tr>
            <tr class="clickable-row" onclick="markAsDone(2)" style="margin: 10px; background-color: #fff;">
                <td>3456</td>
                <td>Showndorjo Dhara</td>
                <td>Psychiatrist</td>
                <td>8:00 - 10:10<br> 19:20 - 21:30</td>
                <td> Address</td>
                <td>Post-traumatic stress disorder<br> Schizophrenia</td>
               
            </tr>
        </tbody>
    </table>
    <div>
        <button type="button" style="font-size: 20px;"> Request </button>
        <button onclick="goHome()" style="font-size: 20px; margin: 30px;">Back to Home</button>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var rows = document.querySelectorAll('.clickable-row');

        rows.forEach(function(row) {
            row.addEventListener('click', function() {
                rows.forEach(function(innerRow) {
                    innerRow.classList.remove('selected');
                });
                this.classList.toggle('selected');
            }); 
        }); 
    });

    function goHome() {
            window.location.href = "/patientHome";
        }
</script>

@endsection