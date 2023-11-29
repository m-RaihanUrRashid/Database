@extends('layout')
<<<<<<< HEAD
@section('title' , 'Psychitrist Home')
@section('content')

<nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ASSYLUM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
=======
@section('title' , 'My Prescriptions')
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

    <h1 id="heading">Prescriptions</h1>

    <form id="prescriptionForm">
        <div class="d-flex">
            <div style="margin: 42px">
                <label for="patientID">Patient ID:</label>
                <input type="text" id="patientID" name="patientID" readonly>

                <label for="medicine1">Medicine1:</label>
                <input type="text" id="medicine1" name="medicine1" readonly>

                <label for="medicine2">Medicine2:</label>
                <input type="text" id="medicine2" name="medicine2" readonly>
            </div>
            <div style="margin: 42px">
            <label for="medicine3">Medicine3:</label>
                <input type="text" id="medicine3" name="medicine3" readonly>

            </div>
        </div>
        <div class="container" style="justify-items: center;">
            <div style="margin: 10px">
                <button type="button" onclick="createPrescription()">Create Prescription</button>
            </div>
            
        </div>
    </form>

    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <script>
        function createPrescription() {
            alert('Prescription Created');
        }

        

        function goHome() {
            window.location.href = "/psychiatristHome";
        }

    </script>

</body>

</html>

@endsection
>>>>>>> 31923d548a44107c770437c696ae117b0609444c
