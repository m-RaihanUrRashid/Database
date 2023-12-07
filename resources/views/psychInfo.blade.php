@extends('layout')
@section('title' , 'Psychitrist Home')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescriptions</title>
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
            margin-bottom: 20px;
            text-align: center;
        }

        td {
            border-right: 1px solid lightgrey;
            padding: 8px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>


<body>

<h1>My Information</h1>

<!-- Display user information dynamically -->
<p>CPS User ID: {{ $psychiatristData->cpsUserID }}</p>
<p>Last Name: {{ $psychiatristData->cLname }}</p>
<p>First Name: {{ $psychiatristData->cFname }}</p>
<p>Email: {{ $psychiatristData->cEmail }}</p>
<p>Type: {{ $psychiatristData->cType }}</p>
<p>Experience: {{ $psychiatristData->cExperience }}</p>


    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <script>
        function goHome() {
            window.location.href = "/psychiatristHome";
        }
    </script>
</body>

</html>

@endsection