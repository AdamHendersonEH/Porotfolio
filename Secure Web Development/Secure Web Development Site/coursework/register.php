<!doctype html>
<!-- declare doctype as html and include bootstrap, javascript file and stylesheet. -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CMP204 Unit Two Coursework Template</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
	<script src="javascript/script.js"></script>
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
        <h1>Register</h1>
        <form action="processRegistration.php" method="post"> <!-- form to register a new user and pass their details into the database-->
          Email:
          <input type="text" name="email">
          <br>
          Username:
          <input type="text" name="username">
          <br>
          Password:
          <input type="password" name="password">
          <br>
          <input type="checkbox" name = "gdpr" required>Accept the privacy policy and opt-into data sharing. <!-- make the user read and accept the GDPR agreement-->
          <br>
          <input type="submit">
        </form>
        <div id="gdpr"> <!-- GDPR Agreement -->
            <p>In alignment with GDPR Compliance, we are obligated to state the following: 
              By signing up to this website we may retain personal information about you such as a user chosen username and password and email. 
              You may opt into this website using your personal information to provide personalised services online. 
              We would like to collect all order information to help us to predict global trends, you may opt in to this as well.
              If you have any questions about this privacy policy or the data it collects, please contact us here: 2300867@uad.ac.uk.
              Your data is stored safely and securely, If we do lose your data we will be fined by the information commisioner.</p>
            <p>Order information is kept to fulfill legal Requirements, your personal information will be deleted if you do not use this website for a year.</p>
          </div>
      </div>
      <div class="col-4"> <!-- use of bootstrap grid system for responsive layout -->
          <img id="privSeal" src="images/privacySeal.png" alt="privacy seal"> <!-- privacy seal image-->
      </div>
    </div>
  </div>
    <!-- jQuery library -->
    <script src="javascript/jquery.js"></script>
    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>
</html>