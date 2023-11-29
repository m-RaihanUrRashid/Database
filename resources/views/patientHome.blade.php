@extends('layout')
@section('title' , 'Home')
@include('/include/navbar')
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
    
    <div  class="buttonBox d-flex align-items-center" style='width: 95%'>
        &nbsp;&nbsp;Check appointments: &nbsp;&nbsp;
        <button type="button" class="btn btn-primary signup" style=background-color:cadetblue;><a href="/calender.calender'">Calender</a></button>
    </div>
</div>

<script>

</script>
@endsection