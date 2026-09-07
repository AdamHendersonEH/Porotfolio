<?php
//include the database connection string
    include_once "includes/connectionString.php";
    //take in the user's input from the form
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $eventIdtoDel = test_input($_POST["deleteEventId"]); // store the user's sanitised input in the eventIdtoDel variable
    }

    function test_input($data) // test_input function
    {
        $data = trim($data); $data = stripslashes($data); $data = htmlspecialchars($data); return $data; // strip whitespace, slashes and change special characters to html special characters, then return the data
    }

    $stmt = $conn->prepare("DELETE FROM eventInfo WHERE `eventInfo`.`eventId` = ?"); // prepare a statement to delete an item from the eventInfo database table where the eventId =?
    $stmt->bind_param("s",$eventIdtoDel); // bind the parameters to complete the prepared statement

    if ($stmt->execute()) // if the statement executes
    {
        header("Location: userProfile.php"); // put the user on the user profile page
    }
    else
    {
        header("userProfile.php?error=query_not_completed"); // else put the user on the user profile page with an error message
    }
    //SQL query to delete event from database

    //redirect user back to profile
    //header("Location: http://www.example.com/");
    $stmt->close(); // close connections
    $conn->close();
?>