@extends('layout')
@section('title' , 'Home')
@section('content')

<style>
    .buttonBox{
        border-radius:  10px;
        
        height: 80px;
        margin: 20px;
        display: table;
        background: white;
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
        <table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">Sunday</th>
      <th scope="col">Monday</th>
      <th scope="col">Tuesday</th>
      <th scope="col">Wednesday</th>
      <th scope="col">Thursday</th>
      <th scope="col">Friday</th>
      <th scope="col">Saturday</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection