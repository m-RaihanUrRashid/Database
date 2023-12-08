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
            animation: fadeInAndScale 1.5s ease-in-out;
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

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
            transition: transform 0.5s ease-in-out, background-color 0.3s ease;
        }

        button:hover {
            transform: scale(1.2);
            background-color: #3498db;
            color: #fff;
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

    <button class="load" onclick="logOut()" style="position: absolute; left: 0; top: 0; margin: 30px;">Log Out</button>
    <button class="load" onclick="pharmaProfile()">My Profile</button>
    <button class="load" onclick="prescriptions()">Prescriptions</button>

    <script>
        function pharmaProfile() {
            window.location.href = "/pharmacyProfile";
        }

        function prescriptions() {
            window.location.href = "/pharmacyPrescriptions";
        }

        function logOut() {
            window.location.href = "/";
            console.log("AAAA")
        }

    </script>
</body>

</html>
@endsection