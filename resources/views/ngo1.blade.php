@extends('layout')
@section('title' , 'NGO Contacts')
@section('content')
@include('/include/navbar')
<html>
<head>
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
<h2 style="text-align:center">Ngo Info<h2> <br>
<table>
  <thead>
    <tr>
      <th>NGOName</th>
      <th>Contact</th>
      <th>Hotline</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Name</td>
      <td>Number</td>
      <td>Number</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>Number</td>
      <td>Number</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>Number</td>
      <td>Number</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>Number</td>
      <td>Number</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>Number</td>
      <td>Number</td>
    </tr>
  </tbody>
</table>

</body>
</html>