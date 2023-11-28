@extends('layout')
@section('title' , 'Home')
@section('content')

<style>
    .buttonBox{
        border-radius:  10px;
        border: 1px solid black;
        height: 80px;
        margin: 20px;
        display: table;
    }
</style>

<h1>Patient Home</h1>
<div class="container1">

    
    <div  class="buttonBox d-flex align-items-center" style='width: 95%'>
        &nbsp;&nbsp;Choose a new specialist: &nbsp;&nbsp;
        <button type="button" class="btn btn-primary signup" style=background-color:cadetblue;>Make Appointment</button>
    </div>


    <div  class="buttonBox" style='width: 95%'>
        &nbsp;&nbsp;View Upcoing appointments: &nbsp;&nbsp; <br>    
        <table border="2" style='width: 95%'>
            <thead>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
                    <th>Header 4</th>
                    <th>Header 5</th>
                    <th>Header 6</th>
                    <th>Header 7</th>
                    <th>Header 8</th>
                </tr>
                <style>
                    /* Add a border to all cells */
                    table{
                        width: 80%; /* Set the width of the table */
                        height: 400px;
                        border-collapse: collapse; /* Collapse the borders */
                        margin: 20px; /* Add margin for spacing */
                        margin: 0 auto;
                    }
                    th, td{
                        border: 1.5px solid darkblue;
                        border-collapse: collapse; /* Optional, for better styling */
                        margin: 0 auto;
                    }
                </style>
            </thead>
            <tbody>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                    <td>Data 4</td>
                    <td>Data 5</td>
                    <td>Data 6</td>
                    <td>Data 7</td>
                    <td>Data 8</td>
                </tr>

                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                    <td>Data 4</td>
                    <td>Data 5</td>
                    <td>Data 6</td>
                    <td>Data 7</td>
                    <td>Data 8</td>
                </tr>

                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                    <td>Data 4</td>
                    <td>Data 5</td>
                    <td>Data 6</td>
                    <td>Data 7</td>
                    <td>Data 8</td>
                </tr>

                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                    <td>Data 4</td>
                    <td>Data 5</td>
                    <td>Data 6</td>
                    <td>Data 7</td>
                    <td>Data 8</td>
                </tr>

                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                    <td>Data 4</td>
                    <td>Data 5</td>
                    <td>Data 6</td>
                    <td>Data 7</td>
                    <td>Data 8</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection