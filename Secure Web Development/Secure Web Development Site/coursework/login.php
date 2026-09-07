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
        <h1>Login</h1> 
        <form action="processLogin.php" method="post"> <!-- form to login by comparing user input to database stored info-->
          Username:
          <input type="text" name="username">
          <br>
          Password:
          <input type="password" name="password">
          <br>
          <input type="submit">
        </form>
      </div>
      <div class="col-4"></div> <!-- use of bootstrap grid system for responsive layout -->
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