<!doctype html>
<!-- declare doctype as html and include bootstrap, javascript file and stylesheet. -->
<html lang="en">
<head>
	<meta charset="utf-8">
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
        <h1>User Profile</h1> <!-- display current logged in user's username -->
        <?php
        if (isset($_SESSION['username']))
          {
            echo ("Welcome, " . htmlspecialchars($_SESSION['username']));
            $username = $_SESSION['username'];
            $userId = $_SESSION['userId'];

          }
          else
          {
            header("Location: login.php?error=not_logged_in");
          }
        ?>
        <?php
            include_once "includes/connectionString.php";
            $stmt = $conn->prepare("SELECT eventId, dateAtt, country, city FROM eventInfo WHERE userId = (SELECT userId FROM userInfo WHERE username = ? )");
            $stmt->bind_param("s",$username);
            $stmt->execute();
            $attended = $stmt->get_result();
          ?>
        <h3> Your events</h3> <!-- display user's attended events -->
        <table>
          <tr>
            <th>Event Id</th>
            <th>Date</th>
            <th>Country</th>
            <th>City</th>
          </tr>
          <?php foreach($attended as $row): ?>
          <tr>
            <td><?= htmlspecialchars($row['eventId']) ?></td>
            <td><?= htmlspecialchars($row['dateAtt']) ?></td>
            <td><?= htmlspecialchars($row['country']) ?></td>
            <td><?= htmlspecialchars($row['city']) ?></td>
          </tr>
          <?php endforeach ?>
        </table>
      </div>
      <div class="col-4"> <!-- use of bootstrap grid system for responsive layout -->
          <h3>Add events</h3>
          <form action="addEventsAttended.php" method="post"> <!-- form to add events the user has attended to the database-->
            Date:
            <input type="date" name="dateAtt">
            <br>
            Country:
            <input type="text" name="country">
            <br>
            City:
            <input type="text" name="city">
            <br>
            <input type="submit">
          </form>
          <h3>Edit Events</h3>
          <form action="editEventsAttended.php" method="post"> <!-- form to edit events the user has attended in the database-->
            Event Id:
            <input type="text" name="editEventId" required>
            <br>
            Date:
            <input type="date" name="dateAtt" required>
            <br>
            Country:
            <input type="text" name="country" required>
            <br>
            City:
            <input type="text" name="city" required>
            <br>
            <input type="submit">
          </form>
          <h3>Delete Events</h3>
          <form action="deleteEventsAttended.php" method="post"> <!-- form to delete events the user has attended from the database-->
            Event Id:
            <input type="text" name="deleteEventId" required>
              <br>
            <input type="submit">
          </form>
        </div>
  </div>
    <!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>