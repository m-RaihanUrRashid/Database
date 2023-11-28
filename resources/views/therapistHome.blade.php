@extends('layout')
@section('title' , 'Therapist Home')
@section('content')
<head>
    <style>h1, h2, p{color: darkblue; font-family: "Helvetica";}</style>
</head>

<body>
<h1 style="text-align: center;">Therapist Home</h1> <br> <br> <br>
<p style="font-size: 1.5em; padding-left: 170px">Appointment Chart</p> <br>

<table border="2">
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



</body>

@endsection