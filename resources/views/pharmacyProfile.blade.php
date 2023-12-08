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

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>

    <h1 id="heading">My Profile</h1>
    <button class="load" onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <form class="load" id="pharmacyForm">
        <div class="d-flex">
            <div style="margin: 42px">
                <label for="pharmacyName">Pharmacy Name:</label>
                <input type="text" id="pharmacyName" name="pharmacyName" readonly>

                <label for="street">Street:</label>
                <input type="text" id="street" name="street" readonly>

                <label for="road">Road:</label>
                <input type="text" id="road" name="road" readonly>
            </div>
            <div style="margin: 42px">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" readonly>

                <label for="contact1">Contact #1:</label>
                <input type="text" id="contact1" name="contact1" readonly>

                <label for="contact2">Contact #2:</label>
                <input type="text" id="contact2" name="contact2" readonly>

                <label for="contact3">Contact #3:</label>
                <input type="text" id="contact3" name="contact3" readonly>
            </div>
        </div>
        <div class="container" style="justify-items: center;">
            <div style="margin: 10px">
                <button type="button" onclick="enableEditing()">Edit Info</button>
            </div>
            <div style="margin: 10px">
                <button type="submit" id="saveBtn" style="display: none;" onclick="submitForm()">Save Changes</button>
            </div>
        </div>
    </form>

    <script>
        function enableEditing() {
            var form = document.getElementById('pharmacyForm');
            var inputs = form.querySelectorAll('input[readonly]');

            for (var i = 0; i < inputs.length; i++) {
                inputs[i].removeAttribute('readonly');
            }

            document.getElementById('saveBtn').style.display = 'block';
        }

        function submitForm() {
            alert('Changes saved!');
        }

        window.onload = function() {
            document.getElementById('pharmacyName').value = 'My Pharmacy';
            document.getElementById('street').value = 'Main Street';
            document.getElementById('road').value = 'Aftabuddin Ahmed Road';
            document.getElementById('city').value = 'Dhaka';
            document.getElementById('contact1').value = '+8801784553315';
            document.getElementById('contact2').value = '+8801784553315';
            document.getElementById('contact3').value = '+8801784553315';
        };

        function goHome() {
            window.location.href = "/pharmacyHome";
        }

    </script>

</body>

</html>

@endsection