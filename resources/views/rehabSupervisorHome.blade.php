@extends('layout')
@section('title' , 'Rehab Supervisor Home')
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

    <h1>Welcome, Rehab Supervisor!</h1>

    <button onclick="rehabInfo()">My Information</button>
    <button onclick="rehabUpdateMyInfo()">Update My Information</button>
    <button onclick="rehabManageSpecialist()">Manage Specialist</button>
    <button onclick="rehabViewSpecialists()">View Specialists</button>
    @if( session('user')->cType == 'Psychiatrist')
      <button onclick="psychiatrist()" style="position: absolute; right: 0; top: 0; margin: 30px;">Psychiatrist window</button>
    @endif
    @if( session('user')->cType == 'Therapist')
      <button onclick="therapist()" style="position: absolute; right: 0; top: 0; margin: 30px;">Therapist window</button>
    @endif
    
    
    
    <script>
      function rehabUpdateMyInfo() {
        window.location.href = "/rehabUpdateMyInfo";
      }

      function rehabManageSpecialist() {
        window.location.href = "/rehabManageSpecialist";
      }


      function rehabViewSpecialists() {
        window.location.href = "/rehabViewSpecialists";
      }

      function rehabInfo() {
        window.location.href = "/rehabInfo";
      }

      function psychiatrist() {
        window.location.href = "/psychiatristHome";
      }

      function therapist() {
        window.location.href = "/therapistdb";
      }
    </script>
</body>
</html>
@endsection