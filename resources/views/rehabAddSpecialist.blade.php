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
    </style>

</head>

<body>

    <h1 id="heading">Add Specialist</h1>

    <form id="AddSpecialistForm" method="post" action="{{ route('add.specialist') }}">
    @csrf <!-- Include CSRF token field in the form -->
        <div class="d-flex">
            <div style="margin: 42px">
                <label for="csUserID">ID:</label>
                <input type="text" id="csUserID" name="specialistID" >

                <label for="cExperience">Experience:</label>
                <input type="text" id="cExperience" name="Experience" >

                <label for="Fname">Fname:</label>
                <input type="text" id="Fname" name="Fname" >

                <label for="Lname">Lname:</label>
                <input type="text" id="Lname" name="Lname" >

            </div>
            <div style="margin: 42px">
                <label for="cOff_Address">Address:</label>
                <input type="text" id="cOff_Address" name="officeAddress" >

                <label for="cType">Type:</label>
                <input type="text" id="cType" name="Type" >

                <label for="DOB">DOB:</label>
                <input type="text" id="DOB" name="DOB" >

                <label for="Email">Email:</label>
                <input type="text" id="Email" name="Email" >

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

</html>

@endsection