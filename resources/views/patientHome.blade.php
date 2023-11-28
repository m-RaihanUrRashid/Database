@extends('layout')
@section('title' , 'Home')
@section('content')

<style>
    .buttonBox{
        border-radius:  10px;
        border: 1px solid black;
        height: 80px;
        margin: 20px;
    }
</style>

<h1>Patient Home</h1>
<div class="container1">

    
    <div  class="buttonBox d-flex align-items-center">
        &nbsp;&nbsp;Choose a new specialist: &nbsp;&nbsp;
        <button type="button" class="btn btn-primary signup" style=background-color:cadetblue;>Make Appointment</button>
    </div>
    <div  class="buttonBox d-flex align-items-center">
        &nbsp;&nbsp;View Upcoing appointments: &nbsp;&nbsp;
        <button type="button" class="btn btn-primary signup" style=background-color:cadetblue;>Make Appointment</button>
    </div>
</div>
@endsection