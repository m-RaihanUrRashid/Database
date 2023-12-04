@extends('layout')
@section('title' , 'Update My Information')
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

    <h1 id="heading">Update Information</h1>

    <form id="InformationForm">
        <div class="d-flex">
            <div style="margin: 42px">
                <label for="supervisorName">Name:</label>
                <input type="text" id="supervisorName" name="supervisorName" readonly>

                <label for="Title">Title:</label>
                <input type="text" id="Title" name="Title" readonly>

                <label for="officeAddress">Office Address:</label>
                <input type="text" id="officeAddress" name="officeAddress" readonly>


            </div>
            <div style="margin: 42px">
                <label for="ID">ID No:</label>
                <input type="text" id="ID" name="ID" readonly>

                <label for="contactNo">Contact No:</label>
                <input type="text" id="contactNo" name="contactNo" readonly>

                <label for="rehab">Rehab:</label>
                <input type="text" id="rehab" name="rehab" readonly>
            </div>
        </div>
        <div class="container" style="justify-items: center;">
            <div style="margin: 10px">
                <button type="button" onclick="saveChanges()">Save Changes</button>
            </div>

        </div>
    </form>

    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <script>
        function saveChanges() {
            alert('Changes Saved');
        }



        function goHome() {
            window.location.href = "/rehabSupervisorHome";
        }
    </script>

</body>

</html>

@endsection