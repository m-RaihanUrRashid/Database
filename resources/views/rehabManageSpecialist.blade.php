@extends('layout')
@section('title' , 'Manage Specialists')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
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
    <h1>Manage Specialists</h1>
    <button onclick="rehabAddSpecialist()">Add Specialist</button>
    <br/>
    <button onclick="rehabRemoveSpecialist()">Remove Specialist</button>



    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <script>
        function rehabAddSpecialist() {
            window.location.href = "/rehabAddSpecialist";
        }

        function rehabRemoveSpecialist() {
            window.location.href = "/rehabRemoveSpecialist";
        }

        function goHome() {
            window.location.href = "/rehabSupervisorHome";
        }
    </script>
</body>

</html>

@endsection