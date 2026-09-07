<?php
//include the database connection string
    include_once "includes/connectionString.php";
    //SQL query to insert event to database
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $eventIdtoEdit = test_input($_POST["editEventId"]);
        $date = test_input($_POST["dateAtt"]);
        $country = test_input($_POST["country"]);
        $city = test_input($_POST["city"]);
    }

    function test_input($data) // test_input function
    {
        $data = trim($data); $data = stripslashes($data); $data = htmlspecialchars($data); return $data; // strip whitespace, slashes and change special characters to html special characters, then return the data
    }

    $stmt = $conn->prepare("UPDATE eventInfo SET dateAtt = ?,country = ?, city = ? WHERE eventId = ?"); // prepare a statement to update an entry in the eventInfo table where the eventId = ?
    $stmt->bind_param("ssss",$date,$country,$city,$eventIdtoEdit); // bind the parameters to complete the prepared statement and update the entry

    if ($stmt->execute()) //if the statement executes
    {
        header("Location: userProfile.php"); // put the user on the user profile page
    }
    else
    {
        header("userProfile.php?error=query_not_completed"); // else put the user on the user profile page with an error message
    }
    //SQL query to update event in database

    //redirect user back to profile
    //header("Location: http://www.example.com/");
    $stmt->close(); // close connections
    $conn->close();
?>