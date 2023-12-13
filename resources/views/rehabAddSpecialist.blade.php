@extends('layout')
@section('title' , 'Add Specialist')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Include CSRF token -->
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: lightblue;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 40px;
            margin-top: 72px;
            text-align: center;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #datepicker {
            border-radius: 5px;
        }

        #time {
            border-radius: 5px;
            width: 70px;
            height: 23px;
        }
    </style>

</head>

<body>

    <h1 id="heading">Add Specialist</h1>

    <form id="AddSpecialistForm" method="post" action="{{ route('add.specialist') }}">
        @csrf <!-- Include CSRF token field in the form -->
        <div class="d-flex">
            <div style="margin: 42px">
                <label for="csUserID">ID:</label>
                <input type="text" id="csUserID" name="specialistID">

                <label for="cExperience">Experience:</label>
                <input type="text" id="cExperience" name="Experience">

                <label for="Fname">Fname:</label>
                <input type="text" id="Fname" name="Fname">

                <label for="Lname">Lname:</label>
                <input type="text" id="Lname" name="Lname">

            </div>
            <div style="margin: 42px">
                <label for="cOff_Address">Address:</label>
                <input type="text" id="cOff_Address" name="officeAddress">

                <label for="cType">Type:</label>
                <input type="text" id="cType" name="Type">

                <label for="DOB">DOB:</label>
                <div style="margin: 30px;">
                    Select Appointment Date:
                    <input value="" type="date" id="datepicker" name="datepicker" disabled>
                    
                    </select>
                </div>

                <label for="Email">Email:</label>
                <input type="text" id="Email" name="Email">

                <label for="cAddress">Home address:</label>
                <input type="text" id="cAddress" name="homeAddress">

            </div>
        </div>
        <div class="container" style="justify-items: center;">
            <div style="margin: 10px">

                <button type="submit">Save Changes</button>
            </div>

        </div>
    </form>

    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <script>
        function saveChanges() {
            alert('Changes Saved');
        }



        function goHome() {
            window.location.href = "/rehabSupervisorHome";
        }
    </script>

</body>

<script>
    // function enableTime() {
    //     if (datepicker.value !== "") {
    //         document.getElementById("time").disabled = false;
    //     }

    //     var times = [];
    //     times.push("asd");
    //     console.log(times);
    //     console.log(datepicker.value);

    //     @foreach($apps as $app)
    //         @foreach($app as $appt)
    //             if (spec == {{ $appt->csUserID }} ) {
    //                 if (datepicker.value == "{{ $appt->dappDate }}") {
    //                     times.push("{{ $appt->dappTime }}");
    //                 }
    //             }
    //         @endforeach
    //     @endforeach

    //     var arr = ["9am", "10am", "11am", "12pm", "1pm", "3pm", "4pm"];
    //     var add = [];
    //     var b = false;

    //     for (var i = 0; i < 7; i++) {
    //         b = false;
    //         for (var j = 0; j < times.length; j++) {
    //             if (times[j] == arr[i]) {
    //                 b = true;
    //             }
    //         }
    //         if (b == false) {
    //             add.push(arr[i]);
    //         }
    //     }

    //     var timeDD = document.getElementById("time");

    //     for (var k = 0; k < add.length; k++) {
    //         var option = document.createElement("option");
    //         option.text = add[k];
    //         option.value = add[k];
    //         timeDD.add(option);
    //     }
    // }

    // This is just the date picker function
    function selectListItem(item) {
        var listItems = document.querySelectorAll('#myList li');
        listItems.forEach(function (li) {
            li.classList.remove('selected');
        });

        item.classList.add('selected');
        document.getElementById("datepicker").disabled = false;
    }
</script>


</html>



@endsection