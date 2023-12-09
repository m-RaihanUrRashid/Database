@extends('layout')
@section('title' , 'Psychiatrist Home')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
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
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
        }

        @media screen and (min-width: 600px) {
            h1 {
                font-size: 36px;
                align-items: center;
            }

            button {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

    <h1>Welcome, Psychiatrist!</h1>

    <button onclick="psychAppt()">My Appointments</button>
    <button onclick="prescriptions()">Make Prescriptions</button>
    <button onclick="prescriptionsView()">View Prescriptions</button>
    <button onclick="myInfo()">My Information</button>
    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Log Out</button>


    <script>
      function psychAppt() {
        window.location.href = "/psychAppt";
      }

      function prescriptions() {
        window.location.href = "/psychPrescription";
      }

      function prescriptionsView() {
        window.location.href = "/psychPrescriptionShow";
      }

      function myInfo() {
        window.location.href = "/psychInfo";
      }

      function goHome() {
            window.location.href = "/";
        }
    </script>
</body>
</html>
@endsection