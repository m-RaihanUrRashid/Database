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
    <form method="post" action="{{route('postRev')}}">
        @csrf
        <div class="d-flex justify-content-center" style="margin: 50px">
        
            <div style="margin-top: 50px;">
                <p><h4>Chose a Specialist:</h4></p>

                
                <table class="table table-hover" id="specialistid" style="width: 70%; table-layout: fixed; border-collapse: collapse;">
                    <thead style="background-color: #3366CC; color: #fff; border-bottom: 2px solid lightblue;">
                        <tr >
                            <th style="padding: 6px;">Specialist ID</th>
                            <th style="padding: 6px;">Name</th>
                            <th style="padding: 6px;">Location</th>
                            <th style="padding: 6px;">Type</th>
                            <th style="padding: 6px;">Choose</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($seenSpec as $sSpec)
                            <tr class="clickable-row" onclick="markAsDone(1)" style="margin: 10px; background-color: #fff; border-bottom: 1px solid lightgrey;">
                                <td>{{$sSpec['seenSpec']->csUserID}}</td>
                                <td>{{$sSpec['specName']->cFname.' '.$sSpec['specName']->cLname}}</td>
                                <td>{{$sSpec['seenSpec']->cOff_Address}}</td>
                                <td>{{$sSpec['seenSpec']->cType}}</td>
                                <td>
                                    <button type="button" id="selectBtn" name="selectedRowId" value="{{ $sSpec['seenSpec']->csUserID }}">Select</button>
                                </td>
                        @endforeach

                        <?php /*
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
                        
                        </tr>*/?>
                    </tbody>
                </table>
            </div>
            <div style="bg-color: white;">
                <p><h4>Review of Specialist:</h4></p>
                <label>Rating: </label>
                <select id="rating" class="styled-select" disabled name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select><br><br>
                <textarea id="textBox" rows="10" cols="50" disabled name="comment"></textarea>
                <br><br>
                <button onclick="sendDataToController('selectBtn', 'rating', 'comment')" id="submitbtn" type="submit " style="font-size: 15px;" disabled>Submit</button>
                
            </div>
        
        </div>
    </form>
    <div>
        <button onclick="goHome()" style="font-size: 20px; margin: 30px;">Back to Home</button>

    </div>
</div>

<script>

    function updateFormData() {
        var selectedRating = document.getElementById('rating').value;
        var comment = document.getElementById('textBox').value;

        // Enable the submit button if both rating and comment are provided
        var submitButton = document.getElementById('submitbtn');
        submitButton.disabled = !(selectedRating && comment);

        // Store the values in hidden fields if needed
        document.getElementById('ratingHidden').value = selectedRating;
        document.getElementById('commentHidden').value = comment;
    }

    // Add event listeners to the form elements to trigger the update function
    document.getElementById('rating').addEventListener('change', updateFormData);
    document.getElementById('textBox').addEventListener('input', updateFormData);

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
            //}
        });
    //});

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

        function sendDataToController(csUserID, rating, comment) {
            
            fetch('{{route('postRev')}}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token if using Laravel
                },
                body: JSON.stringify({ csUserID: csUserID }),
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response data as needed
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
</script>

@endsection