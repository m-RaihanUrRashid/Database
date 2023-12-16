@extends('layout')
@section('title' , 'Update My Information')
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
            height: 125vh;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 40px;
            margin-top: 72px;
            text-align: center;
        }

        .pastform {
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

    <h1 id="heading">Update Information</h1>

    <form method="post" action="{{ route('patientProfile.updateInfo') }}">
        @csrf
        <div class="pastform">
            <div class="d-flex">
                <div style="margin: 42px">
                    <label for="Fname">First Name:</label>
                    <input type="text" id="Fname" name="Fname" value="{{ $user->cFname }}">
                    <label for="Lname">Last Name:</label>
                    <input type="text" id="Lname" name="Lname" value="{{ $user->cLname }}">
                    <label for="DOB">Date of Birth:</label>
                    <input type="date" id="DOB" name="DOB" value="{{ $user->dDOB }}">
                </div>
                <div style="margin: 42px">
                    <label for="Gender">Gender:</label>
                    <input type="text" id="Gender" name="Gender" value="{{ $user->cGender }}">
                    <label for="Address">Address:</label>
                    <textarea name="Address" cols="30" rows="6" style= "resize: none;">{{ $user->cAddress }}</textarea>
                </div>
            </div>
            <div style="margin-left: 42px">
                <label>Medical History:</label>
                <textarea name="mHistory" id="" cols="65" rows="7" style= "resize: none;">{{ $patient->cMedicalHistory }}</textarea>
            </div>
            <div class="container" style="justify-items: center;">
                <div style="margin: 10px">
                    <button type="submit">Update Information</button>
                </div>
            </div>
        </div>
    </form>


    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back</button>

    <script>
        function saveChanges() {
            alert('Changes Saved');
        }

        function goHome() {
            window.location.href = "/patientProfile";
        }
    </script>

</body>

</html>

@endsection