@extends('layout')
@section('title' , 'Rehab Admission')
@section('content')

<style>
    .parent{
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 90vh;
    }

    /* Style the select container */
    .styled-select {
        display: block;
        width: 400px;
        padding: 8px;
        font-size: 20px;
        line-height: 1.5;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
    }

    .styled-select::-moz-focus-inner {
        border: 0;
        padding: 0;
    }

    .styled-select::after {
        content: '\25BC'; 
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;/* Avoid click on the pseudo-element */
    }

    .styled-select:hover,
    .styled-select:focus {
        border-color: #555;
    }

    input{
        border-radius: 8px;
        width: 400px;
    }

</style>
<form action="/patientChoseRehab">
<div class="parent ">
    
        <div class="d-flex">
            <div>
                <label for="cars" style = "font-size: 20px; margin-top: 5px;">Why do you need help?&nbsp</label>
            </div>
            <div>
                <select id="selectBox" onchange="enableTextBox()" class="styled-select" name="issues" id="cars">
                    <option value="no1" name="anx">Substance Abuse and Addiction</option>
                    <option value="#2">Alcoholism</option>
                    <option value="#3">Drug Addiction</option>
                    <option value="#4">Dual Diagnosis/Mental Health Issues</option>
                    <option value="#5">Prescription Medication Dependency</option>
                    <option value="#6">Eating disorders</option>
                    <option onclick="otherBox()" value="#12">Other..</option>


                </select>
            </div>
        </div>
        <div style="font-size: 20px; margin-top: 15px;">
            <label>Other Issues: </label>
            <input id="tbox" type="text" disabled>
        </div>
    
        <div>
            <button type="submit" style="font-size: 20px; margin-top: 15px"> Submit </button>
            <button type="button" onclick="goHome()" style="font-size: 20px; margin: 30px;">Back to Home</button>
        <div>
            
</div>
</form>




<script type="text/javascript">
    function enableTextBox() {
        if( document.getElementById("selectBox").value == "Other.." ) {
            document.getElementById("tbox").disabled = true; 
        }else{
            document.getElementById("tbox").disabled = false; 
        }
    }
    function goHome() {
            window.location.href = "/patientHome";
        }


</script>

@endsection