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
        <h1>Team Members</h1> <!-- text about the team members -->
        <h3>Meet the Organizers</h3>
        <p id="teamMembers">Behind the scenes of Save Point Summit is a dedicated team of passionate gamers, event planners, and industry professionals who share a common goal: to create the ultimate celebration of gaming culture. Our team is made up of individuals with a diverse range of backgrounds — from experienced event organizers who have worked on major conventions, to game developers who understand the needs of both players and creators. What unites us is our love for gaming and our commitment to building an inclusive, immersive experience for everyone involved. We believe that the best events are not just about the games themselves, but about bringing people together. That's why we focus on creating an environment where fans can connect with developers, share their passion with fellow gamers, and discover the latest innovations in gaming. Over the years, our team has worked tirelessly to expand the scope of Save Point Summit, from its humble beginnings to the global event it is today. We are continuously looking for new ways to enhance the attendee experience, ensuring that every year brings something fresh, exciting, and unforgettable. At the heart of Save Point Summit is a team of people who truly care about the gaming community. We’re gamers ourselves, and we understand the importance of creating an event that celebrates the creativity, competition, and camaraderie that make gaming such a unique and powerful form of entertainment. Join us, and experience the passion and dedication of the people who make Save Point Summit possible.</p>
        <button id="ajaxReadMore"> Show team members and their roles</button> <!-- button to trigger ajax event to replace text with little bits of info about the staff members -->
        <br>
      </div>
      <div class="col-4">  <!-- use of bootstrap grid system for responsive layout -->
      <div class="row">
        <div class="column">
          <div class="card"> <!-- use of card format to display ceo info -->
            <img src="images/kevin.jpg" alt="Kevin Skug" style="width:100%">
            <div class="container">
              <h2>Kevin Skug</h2>
              <p class="title">CEO & Founder</p>
              <p>Kevin is the mastermind behind the Save Point Summit series. He worked tirelessly for years perfecting his dream of a space where all gamers could come together, and in 2017 sculpted reality to do so. He and his team spend almost as much time on the convention yearly as they do gaming!</p>
              <p><button id="contact">Contact Us</button></p> <!-- button to trigger jquery ajax to show contact info for ceo -->
              <div id="target"></div>
            </div>
          </div>
        </div>
      </div>
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