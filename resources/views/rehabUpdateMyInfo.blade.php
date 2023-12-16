@extends('layout')
@section('title' , 'Update My Information')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Include CSRF token -->
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

    <h1 id="heading">Update Information</h1>

    <!-- rehabUpdateMyInfo.blade.php -->
    <form method="post" action="{{ route('rehabUpdateMyInfo.post') }}"> <!-- new  -->
        @csrf
        <div class="d-flex">
            <div style="margin: 42px">
                <label for="rehabName">Name:</label>
                <input type="text" id="rehabName" name="rehabName" value="{{ $rehab->cRehabName }}">

                <label for="area">General Area:</label>
                <input type="text" id="area" name="area" value="{{ $rehab->cArea }}">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{ $rehab->cAddress }}">

            </div>
            <div id="contact-container" style="margin: 42px">
                @foreach($contacts as $contact)
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contacts[]" value="{{ $contact->cContact }}">
                @endforeach
            </div>
        </div>
        <div class="container" style="justify-items: center;">
            <div style="margin: 10px">
                <button type="button" onclick="addContact()">Add New Contact</button>
            </div>
            <div style="margin: 10px">
                <button type="submit">Update Information</button>
            </div>
        </div>
    </form>


    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <script>
        function saveChanges() {
            alert('Changes Saved');
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

        function goHome() {
            window.location.href = "/rehabSupervisorHome";
        }
    </script>

</body>

</html>

@endsection