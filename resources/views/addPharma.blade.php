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

    <h1 id="heading">Add Pharmacy</h1>
    <button class="load" onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <form class="load" id="pharmacyForm" action="{{ route('addPharma.save') }}" method="post">
        @csrf
        <div class="d-flex">
            <div style="margin: 42px">
                <label for="pharmacyName">Pharmacy Name:</label>
                <input type="text" id="pharmacyName" name="pharmacyName">

                <label for="area">Area:</label>
                <input type="text" id="area" name="area">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
            </div>
            <div id="contact-container" style="margin: 42px">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contacts[]">
            </div>
        </div>
        <div class="container" style="justify-items: center;">
            <div style="margin: 10px">
                <button type="button" onclick="addContact()" id="contactBtn">Add New Contact</button>
            </div>
            <div style="margin: 10px">
                <button type="submit" id="saveBtn">Add New Pharmacy</button>
            </div>
        </div>
    </form>

    <script>
        function goHome() {
            window.location.href = "/admin";
        }

        function addContact() {
            var container = document.getElementById('contact-container');
            var newContact = document.createElement('div');
            newContact.innerHTML = `
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contacts[]">
            `;
            container.appendChild(newContact);
        }
    </script>

</body>

</html>

@endsection