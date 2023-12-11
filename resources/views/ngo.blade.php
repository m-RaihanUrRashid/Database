@extends('layout')
@section('title' , 'NGO')
@section('content')
@include('/include/navbar')
<html>
<head>
  <a href="ngo1">FurtherInfo</a>
  <a href="http://127.0.0.1:8000">Back</a>
  <style>
    table {
      width: 1300px;
      height:60%;
      margin: 0 auto;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black!important;
      padding: 8px;
    }
  </style>
</head>
<body>
<h2 style="text-align:center">Ngo Rehab Information<h2> <br>
<table>
  <thead>
    <tr>
      <th>NGO ID</th>
      <th>Street</th>
      <th>Road</th>
      <th>City</th>
      <th>Owner</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ngo1</td>
      <td>StreetNo</td>
      <td>RoadNo</td>
      <td>CityName</td>
      <td>OwnerName</td>
    </tr>
      <td>Ngo2</td>
      <td>StreetNo</td>
      <td>RoadNo</td>
      <td>CityName</td>
      <td>OwnerName</td>
    </tr>
      <td>Ngo3</td>
      <td>StreetNo</td>
      <td>RoadNo</td>
      <td>CityName</td>
      <td>OwnerName</td>
    </tr>
      <td>Ngo4</td>
      <td>StreetNo</td>
      <td>RoadNo</td>
      <td>CityName</td>
      <td>OwnerName</td>
    </tr>
      <td>Ngo5</td>
      <td>StreetNo</td>
      <td>RoadNo</td>
      <td>CityName</td>
      <td>OwnerName</td>
    </tr>
  </tbody>
</table>

</body>
</html>