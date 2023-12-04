@extends('layout')
@section('title' , 'Specialist Review')
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

    #textBox{
        resize: none;
        border-radius: 15px;
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
    <div class="d-flex justify-content-center" style="margin: 50px">
        <div style="margin-top: 50px;">
            <p><h4>Chose a Specialist:</h4></p>
            <table class="table table-hover" id="prescriptionsTable" style="width: 70%; table-layout: fixed; border-collapse: collapse;">
                <thead style="background-color: #3366CC; color: #fff; border-bottom: 2px solid lightblue;">
                    <tr >
                        <th style="padding: 6px;">Rehab ID</th>
                        <th style="padding: 6px;">Name</th>
                        <th style="padding: 6px;">Location</th>
                        <th style="padding: 6px;">Speciality(ies)</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable-row" onclick="markAsDone(1)" style="margin: 10px; background-color: #fff; border-bottom: 1px solid lightgrey;">
                        <td>1234</td>
                        <td>Md Gazi</td>
                        <td> Address</td>
                        <td>Alcoholism<br>Drug Addiction</td>

                        
                    </tr>
                    <tr class="clickable-row" onclick="markAsDone(2)" style="margin: 10px; background-color: #fff;">
                        <td>3456</td>
                        <td>Showndorjo Dhara</td>
                        <td> Address</td>
                        <td>Substance Abuse and Addiction<br> Eating disorders</td>
                    
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            
            <form action="/action_page.php">
                <p><h4>Review of Specialist:</h4></p>
                <label>Rating: </label>
                <select id="rating" class="styled-select" disabled>
                    <option value="no1">1</option>
                    <option value="#2">2</option>
                    <option value="#3">3</option>
                    <option value="#4">4</option>
                    <option value="#5">5</option>
                    <option value="#6">6</option>
                    <option value="#3">7</option>
                    <option value="#4">8</option>
                    <option value="#5">9</option>
                    <option value="#6">10</option>
                </select><br><br>
                <textarea id="textBox" rows="10" cols="50" disabled></textarea>
                <br><br>
                <button id="submitbtn" type="button" style="font-size: 15px;" disabled>Submit</button>
            </form>
        </div>
    </div>
    <div>
        <button onclick="goHome()" style="font-size: 20px; margin: 30px;">Back to Home</button>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var rows = document.querySelectorAll('.clickable-row');

        var selected = false;

        rows.forEach(function(row) {
            row.addEventListener('click', function() {
                rows.forEach(function(innerRow) {
                    innerRow.classList.remove('selected');
                });
                this.classList.toggle('selected');
                document.getElementById("rating").disabled = false; 
                document.getElementById("textBox").disabled = false; 
                document.getElementById("submitbtn").disabled = false; 

            }); 
        }); 
    });

    function enableTextBox() {
        if( document.getElementById("selectBox").value == "Other.." ) {
            document.getElementById("tbox").disabled = true; 
        }else{
            document.getElementById("tbox").disabled = false; 
        }
    }

    function goHome() {
            window.location.href = "/patientHome";
        }
</script>

@endsection