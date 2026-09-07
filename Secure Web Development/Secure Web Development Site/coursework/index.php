<!doctype html>
<!-- declare doctype as html and include bootstrap, javascript file and stylesheet. -->
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport"  content="width-device-width, initial-scale=1">
	<title>CMP204 Unit Two Coursework Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
      <h1>Home</h1> <!-- text about the convention -->
      <h3>Welcome to Save Point Summit 2024!</h3>
          <p>Level up your gaming experience at the ultimate event of the year!
          Join us at Save Point Summit, where the world of gaming comes alive with the latest releases, exclusive reveals, and unforgettable experiences. Whether you're a hardcore gamer, a casual player, or someone passionate about gaming culture, there's something for everyone!</p>

          <b>What to Expect:</b>
          <ul>
            <li>Cutting-Edge Demos: Be the first to try out upcoming games and get hands-on with new technology.</li>
            <li>Live Tournaments: Watch top-tier players battle it out in electrifying esports competitions, or enter the arena yourself for a chance to win incredible prizes!</li>
            <li>Exclusive Panels: Hear from industry leaders, developers, and influencers as they discuss the future of gaming, game design, storytelling, and more.</li>
            <li>Cosplay Showcases: Show off your costume or admire the creativity of fellow fans in our exciting cosplay contests.</li>
            <li>Vendor Alley: Discover gaming merch, collectibles, and exclusive deals from your favorite brands.</li>
          </ul>
      <b>Join the Community:</b>
      <p>Connect with fellow gamers, share your passion, and make lasting memories. Save Point Summit is more than just a convention — it's a celebration of everything that makes gaming great.</p>
    </div>
    <div class="col-4"> <!-- bootstrap grid layout for responsive layout -->
      <img src="images/alley.jpg"alt="artist alley" width=100%> <!-- images of the convention -->
      <br>
      <img src="images/demo.jpg"alt="game demo" width=100%>
      <br>
      <img src="images/tournament.jpg"alt="tournaments" width=100%>
    </div>
  </div>
</div>
    <!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>