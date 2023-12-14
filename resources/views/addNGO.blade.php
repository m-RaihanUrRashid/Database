@extends('layout')
@section('title' , 'My Profile')
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
            margin-bottom: 40px;
            margin-top: 72px;
            text-align: center;
            animation: fadeInAndScale 1.5s ease-in-out;
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
            transition: transform 0.5s ease-in-out, background-color 0.3s ease;
        }

        button:hover {
            transform: scale(1.05);
            background-color: #3498db;
            color: #fff;
        }

        .load {
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

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>

    <h1 id="heading">Add NGO</h1>
    <button class="load" onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <form class="load" id="NGOForm">
        <div class="d-flex">
            <div style="margin: 42px">
                <label for="owner">NGO Owner</label>
                <input type="text" id="owner" name="owner">

                <label for="area">Area:</label>
                <input type="text" id="area" name="area">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
            </div>
            <div style="margin: 42px">
                <label for="contact1">Contact #1:</label>
                <input type="text" id="contact1" name="contact1">

                <label for="contact2">Contact #2:</label>
                <input type="text" id="contact2" name="contact2">

                <label for="contact3">Contact #3:</label>
                <input type="text" id="contact3" name="contact3">
            </div>
            <div style="margin: 42px">
                <label for="hotline1">Hotline #1:</label>
                <input type="text" id="hotline1" name="hotline1">

                <label for="hotline2">Hotline #2:</label>
                <input type="text" id="hotline2" name="hotline2">

                <label for="hotline3">Hotline #3:</label>
                <input type="text" id="hotline3" name="hotline3">
            </div>
        </div>
        <div class="container" style="justify-items: center;">
            <div style="margin: 10px">
                <button type="submit" id="saveBtn">Add New Pharmacist</button>
            </div>
        </div>
    </form>

    <script>
        function goHome() {
            window.location.href = "/admin";
        }
    </script>

</body>

</html>

@endsection