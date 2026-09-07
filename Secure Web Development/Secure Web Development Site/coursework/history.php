<!doctype html>
<!-- declare doctype as html and include bootstrap and stylesheet. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CMP204 Unit Two Coursework Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>


<body>
<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Save Point Summit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <?php include_once "includes/links.php" ?>
  </div>
</nav>
<!-- use bootstrap container for a responsive layout -->
  <div class="container-fluid">
    <div class="row"> <!-- use of bootstrap grid system for responsive layout -->
      <div class="col-8">
        <h1>History</h1> <!-- text about the history of the convention -->
        <h3>The History of Save Point Summit</h3>
        <p>Save Point Summit began as a small, grassroots event in 2017, conceived by a passionate group of gamers and industry professionals who wanted to create a space where the gaming community could come together to celebrate everything they loved about video games. What started as an intimate gathering of enthusiasts quickly grew into one of the most anticipated gaming conventions in the industry.</p>
        <p id="history"></p> <!-- target for javascript read more to append a text node to or to hide the appended text node -->
        <button id="readMore">Read More</button> <button id="readLess">Read Less</button> <!-- event handlers for read more and read less in javascript and jquery -->
      </div>
      <div class="col-4"> <!-- use of bootstrap grid system for responsive layout -->
      <img src="images/arcadeVenue.jpg"alt="Arcades in the venue" width=100%> <!-- images of old venues -->
      <br>
      <img src="images/oldVenue.jpg"alt="old venue" width=100%>
      <br>
      <img src="images/oldestVenue.jpg"alt="even older venue" width=100%>
      </div>
  </div>
    <!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
      <!-- javascript file -->
    <script src="javascript/script.js"></script>

  </body>
</html>