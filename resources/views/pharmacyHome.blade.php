@extends('layout')
@section('title' , 'Pharmacy Home')
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

    <h1>Welcome, Pharmacist!</h1>

    <button onclick="pharmaProfile()">My Profile</button>
    <button onclick="prescriptions()">Prescriptions</button>

    <script>
      function pharmaProfile() {
        window.location.href = "/pharmacyProfile";
      }

      function prescriptions() {
        window.location.href = "/pharmacyPrescriptions";
      }
    </script>
</body>
</html>
@endsection