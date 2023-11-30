<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="sidebar">
  <!-- <a class="active" href="#home">Home</a> -->
  <li><a href="#" onclick="loadPage('/patientHome.blade.php')">Home</a></li>
                <li><a href="#" onclick="loadPage('about.html')">About</a></li>
                <li><a href="#" onclick="loadPage('services.html')">Services</a></li>
</div>

<main class="main-content" id="mainContent">
            <!-- Content will be dynamically loaded here -->
        </main>

<!-- Page content -->
<div class="content">

</div>

<script>
  function loadPage(page) {
    // Use Fetch API to load the content of the selected page
    fetch(page)
        .then(response => response.text())
        .then(content => {
            // Replace the content of the main content section
            document.getElementById('mainContent').innerHTML = content;
        })
        .catch(error => console.error('Error loading page:', error));
}

</script>

<style>
    .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: cadetblue;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</body>

</html>