@extends('layout')
@section('title', 'View Rehab Specialists')
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

    <h1>Rehab Specialists</h1>

    <table id="specialistTable" style="width: 70%; table-layout: fixed; border-collapse: collapse;">
        <thead style="background-color: #3498db; color: #fff; border-bottom: 2px solid lightblue;">
            <tr>
                <th style="padding: 6px;">Specialist ID</th>
                <th style="padding: 6px;">Experience</th>
                <th style="padding: 6px; width: 200px">Office Address</th>
                <th style="padding: 6px;">Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($specialists as $specialist)
                <tr style="margin: 10px; background-color: #fff; border-bottom: 1px solid lightgrey;">
                    <td>{{ $specialist->csUserID }}</td>
                    <td>{{ $specialist->cExperience }}</td>
                    <td>{{ $specialist->cOff_Address }}</td>
                    <td>{{ $specialist->cType }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <script>
        function markAsDone(x) {
            // Update DBMS here
            alert('You clicked me!');
        }

        function goHome() {
            window.location.href = "/rehabSupervisorHome";
        }
    </script>

</body>

</html>

@endsection
