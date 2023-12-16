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
<h2 style="text-align:center">Ngo Rehab Information</h2> <br>
<table id="ngoTable">
  <thead>
    <tr>
      <th>NGO ID</th>
      <th>Street</th>
      <th>Road</th>
      <th>City</th>
      <th>Owner</th>
      <th>Action</th> <!-- Added column for Update button -->
    </tr>
  </thead>
  <tbody>
    <!-- Rows with contenteditable cells and Update button -->
    <tr>
      <td contenteditable="true">Ngo1</td>
      <td contenteditable="true">StreetNo</td>
      <td contenteditable="true">RoadNo</td>
      <td contenteditable="true">CityName</td>
      <td contenteditable="true">OwnerName</td>
      <td><button onclick="updateRow(this)">Update</button></td>
    </tr>
    <!-- Additional rows here -->
  </tbody>
</table>
<script>
</table>
<button onclick="addRow()">Add</button>
<button onclick="deleteRow()">Delete</button>
<script>
  function addRow() {
    var table = document.getElementById("ngoTable").getElementsByTagName('tbody')[0];
    var row = table.insertRow(-1); // Insert row at the end of the table
    // Add cells and content similar to existing rows
    // You may use input fields for user input
    // For example:
    row.innerHTML = `
      <td>New Ngo</td>
      <td>New StreetNo</td>
      <td>New RoadNo</td>
      <td>New CityName</td>
      <td>New OwnerName</td>
    `;
  }

  function deleteRow() {
    var table = document.getElementById("ngoTable").getElementsByTagName('tbody')[0];
    if (table.rows.length > 0) {
      table.deleteRow(-1); // Delete the last row
    }
  }
</script>
</body>
</html>
