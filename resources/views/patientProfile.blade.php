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
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>

    <h2 id="heading">My Profile</h2>

    <form id="pharmacyForm">
        <div class="d-flex">
            <div style="margin: 20px">
                <label for="pharmacyName">Name:</label>
                <input type="text" id="pharmacyName" name="pharmacyName" readonly>

                <label for="street">Date of Birth:</label>
                <input type="text" id="street" name="street" readonly>

                <label for="road">Address:</label>
                <input type="text" id="road" name="road" readonly>
            </div>
            <div style="margin: 20px">
                <label for="city">Email:</label>
                <input type="text" id="city" name="city" readonly>

                <label for="contact1">Contact #1:</label>
                <input type="text" id="contact1" name="contact1" readonly>

                <label for="contact2">Contact #2:</label>
                <input type="text" id="contact2" name="contact2" readonly>
            </div>
        </div>
        <div class="container" style="justify-items: center;">
            <div style="margin: 10px">
                <button type="button" onclick="enableEditing()">Edit Info</button>
            </div>
            <div style="margin: 10px">
                <button type="submit" id="saveBtn" style="display: none;" onclick="submitForm()">Save Changes</button>
            </div>
            <div>
                <button type="button" onclick="goHome()">Back to Home Page</button>
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
            document.getElementById('pharmacyName').value = 'Raihan Ur Rashid';
            document.getElementById('street').value = '21/12/2000';
            document.getElementById('road').value = 'Aftabuddin Ahmed Road';
            document.getElementById('city').value = 'raihan@gmail.com';
            document.getElementById('contact1').value = '+8801784553315';
            document.getElementById('contact2').value = '+8801784553315';
        };

        function goHome() {
            window.location.href = "/patientHome";
        }

    </script>

</body>

</html>

@endsection