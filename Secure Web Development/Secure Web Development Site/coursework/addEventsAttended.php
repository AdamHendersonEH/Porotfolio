<?php
//include the database connection string
    include_once "includes/connectionString.php";
    //SQL query to insert event to database
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $date = test_input($_POST["dateAtt"]);
        $country = test_input($_POST["country"]);
        $city = test_input($_POST["city"]);



    }

    function test_input($data)
    {
        $data = trim($data); $data = stripslashes($data); $data = htmlspecialchars($data); return $data; // strip whitespace, slashes and change special characters to html special characters, then return the data
    }
    ob_start(); // begin a session
    session_start();
    if (isset($_SESSION['username'])&&isset($_SESSION['userId'])) // check that the session is set and if so display the users name
      {
        echo ("Welcome, " . htmlspecialchars($_SESSION['username'])); 
        $username = $_SESSION['username']; // set the username and userId to this sessions username and userId
        $userId = $_SESSION['userId'];
      }

    $stmt = $conn->prepare("INSERT INTO eventInfo (dateAtt,country,city,userId) VALUES (?,?,?,?)"); // prepare a statement to insert a new entry into the eventInfo table where the dateAtt,country, city and userId are all ?
    $stmt->bind_param("sssi",$date,$country,$city,$userId); // bind the parameters to complete the prepared statement

    if ($stmt->execute()) //if the statement executes
    {
        header("Location: userProfile.php"); //redirect the user to the userProfile page
    }  
    else
    {
        header("Location: userProfile.php?error=query_not_completed"); // else redirect the user to the userProfile page with an error message
    }
        
    $stmt->close(); //close the connections
    $conn->close();
    

?>
  