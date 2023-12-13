@extends('layout')
@section('title' , 'My Profile')
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
            animation: fadeInAndScale 1.5s ease-in-out;
        }

        td {
            border-right: 1px solid lightgrey; 
            padding: 8px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.5s ease-in-out, background-color 0.3s ease;
        }

        button:hover {
            transform: scale(1.2);
            background-color: #3498db;
            color: #fff;
        }

        .load{
            opacity: 0;
            animation: fadeInAndScale 1.5s ease-in-out 0.5s forwards;
        }

        @keyframes fadeInAndScale {
            from {
                opacity: 0;
                transform: scale(0.8) translateY(-10px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0px);
            }
        }
    </style>
</head>

<body>
    <h1>Prescriptions</h1>
    <button class="load" onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <table class="load" id="prescriptionsTable" style="width: 70%; table-layout: fixed; border-collapse: collapse;">
        <thead style="background-color: #3498db; color: #fff; border-bottom: 2px solid lightblue;">
            <tr>
                <th style="padding: 6px;">Prescription ID</th>
                <th style="padding: 6px;">Issue Date</th>
                <th style="padding: 6px;">Patient Name</th>
                <th style="padding: 6px;">Psychiatrist Name</th>
                <th style="padding: 6px;">Psychiatrist Contact</th>
                <th style="padding: 6px;">List of Medicines</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="markAsDone(1)" style="margin: 10px; background-color: #fff; border-bottom: 1px solid lightgrey;">
                <td>1234</td>
                <td>12/11/23</td>
                <td>Ikram</td>
                <td>Dr. Gazi</td>
                <td>+8801235642384</td>
                <td>Napa, Ceevit, Fexo</td>
            </tr>
            <tr onclick="markAsDone(2)" style="margin: 10px; background-color: #fff;">
                <td>1234</td>
                <td>12/11/23</td>
                <td>Raihan</td>
                <td>Dr. Gazi</td>
                <td>+8801235642384</td>
                <td>Napa, Ceevit, Fexo</td>
            </tr>
        </tbody>
    </table>

    <script>
        function markAsDone(x) {
            //update DBMS here
            alert('Prescription Dispatched!');
        }

        function goHome() {
            window.location.href = "/pharmacyHome";
        }
    </script>

</body>

</html>

@endsection