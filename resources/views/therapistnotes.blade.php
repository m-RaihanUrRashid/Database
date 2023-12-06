@extends('layout')
@section('title' , 'Therapist Notes')
@section('content')

<head>
    <style>h1, h2, p, li{color: darkblue; font-family: "Georgia"; font-size: 1.22em;}</style>
</head>


<!-- Navbar aesthetic properties -->
<style>
    .navbar {
    background-color: navy;
    padding: 15px;
    color: white;
    text-align: center;
    transition: 0.3s; /* Add smooth transition effect */
    overflow: hidden;
    }

    .navbar a{
        font-family: 'Georgia';
        text-decoration: none;
        color: white;
        padding: 5px;
        margin: 5px;
    }
    .navbar a:hover{
        color: blue!important; cursor: pointer!important; transition: 0.2s!important;
        text-decoration: none;
    }
    .navb{
        width: 2px; /* Adjust border width */
        height: 100%; /* Adjust border height */
        background-color: black; /* Adjust border color */
    }
</style>

<!--Navbar Overflow Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById('navbar');

        navbar.addEventListener('mouseenter', function () {
            navbar.style.overflow = 'visible';
        });

        navbar.addEventListener('mouseleave', function () {
            navbar.style.overflow = 'hidden';
        });
    });
</script>



<!-- Dropdown aesthetics -->
<style>
    .dropdown {
        display: inline-block;
        position: relative;
    }

    .dropbtn {
        font-family: 'Georgia';
        text-decoration: none;
        color: white;
        padding: 5px;
        margin: 5px;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: navy;
        min-width: 100px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        right: 0;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        z-index: 1;
    }

    .dropdown-content a:hover {
        background-color: navy;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: navy; /* Change to the desired hover color */
        color: white; /* Change to the desired text color */
    }
</style>

<!-- Navbar script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');

    document.addEventListener('mousemove', function(e) {
        // Check if the cursor is outside the navbar
        if (!navbar.contains(e.target)) {
            navbar.style.height = '0';
        } else {
            navbar.style.height = '70px';
        }
        });
    });
</script>

<!-- Navbar -->
<div class="navbar" id="navbar">
        <a style= "margin-left: 20px" href="http://127.0.0.1:8000/therapistdb">HOME</a>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/profile logo inv.png" width="20" height="20" alt="pl"></div>
            <a href="http://127.0.0.1:8000/therapistprofile">Profile</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/appt_logo.png" width="25" height="25" alt="ab"></div>
            <a href="http://127.0.0.1:8000/therapistHome/">Appointment</a> 
        </section>
        <span class="navb"></span>
        <section style= "display: flex;">
            <div style= "padding-top: 6.5px;"> <img src="/img/lines.png" width="15" height="15" alt="li"></div>
            <div class="dropdown">
            <a class="dropbtn">More</a> 
            <div class="dropdown-content">
                <a href="http://127.0.0.1:8000/">Log Out</a>
            </div>
            </div>
        </section>
</div> 
<br>

<h1 style="text-align: center;">Notes</h1> <br> <br> <br>

<div style="padding: 20px"></div>

<!-- Form Error Checking -->
<div style="text-align:center">
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
    @endif
</div>

<!-- Form style -->
<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-family: Georgia;
        color: darkblue;
    }

</style>

<!-- Form input stuff-->
<form method="post" action="{{route('note.store')}}";>
    @csrf
    @method('post')
    <!-- Input box with a label -->
    <label for="Patient ID">Patient ID</label>
    <input type="text" name="pid" placeholder="Enter ID"><br>

    <label for="Patient Name">Patient Name</label>
    <input type="text" name="name" placeholder="Enter Name"><br>

    <label for="Notes">Notes</label>
    <textarea type="text" name="note" rows="15" cols="40" placeholder="Enter Notes"></textarea> <br>

    <div style = "align-items: center; text-align: center;">
    <input type="submit" value="Create" class="sbm" />
    </div>
</form>

<!-- Button styles-->
<style>
    .cbtn{
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .cbtn.clicked{
        background-color: lightgreen; /* Change to the desired color */
        color: darkgreen; /* Change to the desired text color */

    }
    .cbtn1{
        display: inline-block;
        margin-left: 10px;
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .cbtn1.clicked{
        background-color: lightcoral; /* Change to the desired color */
        color: maroon; /* Change to the desired text color */
    }

    .cbtn2{
        display: inline-block;
        margin-left: 10px;
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.2s;
    }
    .cbtn2.clicked{
        background-color: lightgoldenrodyellow; /* Change to the desired color */
        color: darkgoldenrod /* Change to the desired text color */
    }

</style>
<!-- Button scripts-->
<script>
function toggleClickedState(button) {
    const buttons = document.querySelectorAll('.cbtn, .cbtn1, .cbtn2');
    buttons.forEach((btn) => {
        if (btn !== button) {
            btn.classList.remove('clicked');
        }
    });

    button.classList.toggle('clicked');
}
</script>

<div style="align-items: center; text-align:center">
    <p>Condition:</p>
    <button class="cbtn" onclick="toggleClickedState(this)">Good</button>
    <button class="cbtn2" onclick="toggleClickedState(this)">Average</button>
    <button class="cbtn1" onclick="toggleClickedState(this)">Bad</button>
</div>


<p style = "text-align: center; margin-top: 40px">Set Patient State(0-10):</p>
<!-- Scale style -->
<style> 
    .dex{
        font-family: 'Georgia';
        height: 20vh;
        margin-top: 10px;
    }
    #scale-container {
      margin: 0 auto;
      position: relative;
      width: 350px;
      height: 50px;
      background-color: azure;
      border-radius: 5px;
      overflow: hidden;
    }

    #scale {
      display: flex;
      height: 100%;
      transition: transform 0.5s ease;
    }

    .number {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: bold;
      color: #333;
      border-right: 1px solid #000;
    }
    .number:last-child {
      border: none; /* Remove the border from the last number */
    }
    #pointer {
      position: absolute;
      top: 0;
      left: 0;
      width: 30px;
      height: 50px;
      background-color: navy;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
      cursor: grab;
      user-select: none;
    }
</style>

<!-- Scale format -->
<div class="dex">
    <div id="scale-container">
        <div id="scale">
            <div class="number">0</div>
            <div class="number">1</div>
            <div class="number">2</div>
            <div class="number">3</div>
            <div class="number">4</div>
            <div class="number">5</div>
            <div class="number">6</div>
            <div class="number">7</div>
            <div class="number">8</div>
            <div class="number">9</div>
            <div class="number">10</div>
        </div>
        <div id="pointer">0</div>
    </div>
</div>

<!-- Scale functioning -->
<script>
  const scale = document.getElementById('scale');
  const pointer = document.getElementById('pointer');

  let isDragging = false;

  pointer.addEventListener('mousedown', (e) => {
    isDragging = true;
    pointer.style.cursor = 'grabbing';
  });

  document.addEventListener('mouseup', () => {
    isDragging = false;
    pointer.style.cursor = 'grab';
  });

  document.addEventListener('mousemove', (e) => {
    if (!isDragging) return;

    const rect = scale.getBoundingClientRect();
    let position = (e.clientX - rect.left) / rect.width;
    position = Math.max(0, Math.min(1, position));

    const value = Math.round(position * 10);
    pointer.textContent = value;
    pointer.style.left = `${position * 92}%`;
  });
</script>

<!-- Submit Button -->
<style>
    .sbm{
        font-size: 16px;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 10px;
        background-color: cadetblue; /* Change the background color */
        color: white;
        cursor: pointer;
        margin-bottom: 100px;}
</style>

