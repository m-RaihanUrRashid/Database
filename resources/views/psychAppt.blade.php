@extends('layout')
@section('title' , 'My Appointments')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescriptions</title>
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
            margin-bottom: 20px;
            text-align: center;
        }

        td {
            border-right: 1px solid lightgrey; 
            padding: 8px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

    </style>
</head>

<body>

    <h1>Appointments</h1>
    {{$appointments}}
    {{session('user')}}

    <table id="prescriptionsTable" style="width: 70%; table-layout: fixed; border-collapse: collapse;">
        <thead style="background-color: #3498db; color: #fff; border-bottom: 2px solid lightblue;">
            <tr>
                <th style="padding: 6px;">Patient ID</th>
                <th style="padding: 6px;">psych ID</th>
                <th style="padding: 6px;">Date</th>
                <th style="padding: 6px;">Time</th>
                <th style="padding: 6px;">Status</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            <tr  style="margin: 10px; background-color: #fff; border-bottom: 1px solid lightgrey;">
                <td>{{ $appointment->cpUserID }}</td>
                <td>{{ $appointment->csUserID }}</td>
                <td>{{ $appointment->dappDate }}</td>
                <td>{{ $appointment->dappTime }}</td>
                <td>{{ $appointment->cappStatus}}</td>

         
                <!-- Add more columns as needed -->
            </tr>
            @endforeach
        </tbody>
    </table>

    <button onclick="goHome()" style="position: absolute; left: 0; top: 0; margin: 30px;">Back to Home Page</button>

    <script>
        function markAsDone(element) {
    var appointmentId = element.getAttribute('data-appointment-id');
    // Now, use `appointmentId` as needed
    alert('Mark as done for Appointment ID: ' + appointmentId);
}
        function goHome() {
            window.location.href = "/psychiatristHome";
        }
    </script>

</body>
</html>

@endsection