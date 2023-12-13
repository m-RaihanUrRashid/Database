@extends('layout')
@section('title' , 'Appointment')
@section('content')

<style>
    .parent {
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh;
    }

    /* Style the scrollable div */
    .scrollable-div {
        width: 600px;
        height: 400px;
        overflow: auto;
        /* Make the div scrollable */
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

    #datepicker{
        border-radius: 5px;
    }

    #time{
        border-radius: 5px;
        width: 70px;
        height: 23px;
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

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin: 5px;
        padding: 10px;
        border: 1px solid #ccc;
        transition: background-color 0.3s;
    }

    li:hover {
        background-color: #cac9ff;
    }

    label {
        font-size: 8px;

    }

    .selected {
        background-color: #aaf;
    }

    button{
        font-size: 18px;
    }

    .bold {
        font-weight: bold;
        font-family: 'Georgia', serif;
    }

    .italic {
        font-style: italic;
    }
</style>

@if(session()->has('success'))
    <div class="alert alert-danger" role="alert"> 
        {{session('success')}}
    </div>
@endif

<div class="parent">
    <div>
        <div class="scrollable-div" style="border-radius: 10px; margin: 40px;">
            <ul id='myList'>
                @foreach($specs as $spec)
                    @foreach($spec as $person)

                    <li onclick="selectListItem(this)" id="spec" value="{{ $person->cUserID }}">
                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                            style="height: 50px; width: 50px">

                        &nbsp;&nbsp;&nbsp;
                        <span class="bold">{{$person->cFname.' '.$person->cLname}}</span>
                        <span class="italic" style="float: right;">{{$person->cType}}</span>
                    </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
    <div>
        <div style="margin: 30px;">
            Select Appointment Date:
            <input onchange="enableTime()" value="" type="date" id="datepicker" name="datepicker" disabled>
            <br><br>Select Appointment time:
            <select id="time" class="styled-select" name="time" disabled>
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <button onclick="saveApp()">Make Appointment</button> &nbsp;&nbsp;&nbsp;
            <button onclick="goHome()">Back to Home</button>

        </div>
    </div>
</div>


<script>

    var spec;
    
    document.getElementById('myList').addEventListener('click', function (event) {
        //alert('You clicked on ' + event.target.innerText);
        //var spec = myList.
        //console.log(document.getElementById("spec").value);
        //spec = document.getElementById("spec").value;
    });

    function enableTime() {

        document.getElementById("time").innerHTML = '';

        if (datepicker.value !== "") {
            document.getElementById("time").disabled = false;
        }

        var times = [];

        @foreach($apps as $app)
            @foreach($app as $appt)

                if (spec == {{ $appt -> csUserID }} ) {
                    if (datepicker.value == "{{ $appt->dappDate }}") {
                        times.push("{{ $appt->dappTime }}");
                    }
                }
            //console.log({{ $appt-> dappDate}});
            @endforeach
        @endforeach

        var arr = ["9am", "10am", "11am", "12pm", "1pm", "3pm", "4pm"];
        var add = [];
        var b = false;

        for (var i = 0; i < 7; i++) {
            b = false;
            for (var j = 0; j < times.length; j++) {
                if (times[j] == arr[i]) {
                    b = true;
                }
            }
            if (b == false) {
                add.push(arr[i]);
            }
        }

        var timeDD = document.getElementById("time");

        for (var k = 0; k < add.length; k++) {
            var option = document.createElement("option");
            option.text = add[k];
            option.value = add[k];
            timeDD.add(option);
        }

    }

    function saveApp(){
        var date = document.getElementById("datepicker").value;
        var time = document.getElementById("time").value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '{{ route('saveApp') }}', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

        xhr.onload = function() {
            if (xhr.status === 200) {
                var responseData = JSON.parse(xhr.responseText);

                if (responseData.status === 'success') {
                    alert('Operation successful!');
                } else {
                }
            } else {
                console.error('Request failed. Status:', xhr.status);
            }
        };

        console.log(spec + " " + date + " " + time);

        var formData = 'spec=' + encodeURIComponent(spec) +
                    '&date=' + encodeURIComponent(date) +
                    '&time=' + encodeURIComponent(time);

        xhr.send(formData);
    }

    function selectListItem(item) {

        console.log(item.value);

        spec = item.value;

        var listItems = document.querySelectorAll('#myList li');
        listItems.forEach(function (li) {
            li.classList.remove('selected');
        });

        item.classList.add('selected');

        document.getElementById("datepicker").disabled = false;

    }

    function goHome() {
        window.location.href = "/patientHome";
    }

</script>

@endsection