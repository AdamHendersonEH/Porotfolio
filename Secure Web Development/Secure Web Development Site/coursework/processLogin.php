<?php
// include the database connection string
    include_once "includes/connectionString.php";
    //SQL query to insert user to database
    // take in the data posted to this file from the form
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = test_input($_POST["username"]); // set the username variable to the user's sanitised input
        $password = test_input($_POST["password"]);// set the password variable to the user's sanitised input

        $hash = password_hash($password, PASSWORD_DEFAULT); // salt and hash the password for security



    }

    function test_input($data) // test_input functuon
    {
        $data = trim($data); $data = stripslashes($data); $data = htmlspecialchars($data); return $data; // strip whitespace, slashes and convert any special chars to html special chars and return the data
    }

    // write a prepared statement to select the userId and userPassword from the database where the username is = ?
    $stmt = $conn->prepare("SELECT userId, userPassword FROM userInfo WHERE username=?");
    $stmt->bind_param("s",$username); // bind the paramaters so that the username in teh prepared statement is the user's input

    if ($stmt->execute()) // if the statement executes
    {
        $stmt->store_result(); // store the results
        $stmt->bind_result($userId,$storedHash); // bind the userId and stored hash
        if ($stmt->fetch()) // if the results are fetched
        {
            if (password_verify($password,$storedHash)) // if the password verifies against the stored hash
            {
                ob_start(); // begin a session
                session_start();
                $_SESSION['username'] = $username; // set a username and userId
                $_SESSION['userId'] = $userId;
                if (!isset($_SESSION['username'])&&!isset($_SESSION['userId'])) //check the session has started and if not send the user to the homepage
                {
                    header("Location: index.php");
                }
                else
                {
                    header("Location: userProfile.php"); //else send them to the user profile page
                }
                
            }
            else
            {
                header("Location: login.php?error=invalid_username_or_password"); // if passwords dont match send an error informing the user their username or password is incorrect
            }
        }
        else
        {
            header("Location: login.php?error=invalid_username_or_password"); // if passwords dont match send an error informing the user their username or password is incorrect
        }
    }
    else
    {
        header("Location: login.php?error=query_failed"); // if the statement doesnt execute report that the query failed
    }
        
    $stmt->close(); // close the connections
    $conn->close();
    //SQL query to check if login is a registered user

    //if yes, redirect user to profile, else redirect back to login page
    //header("Location: http://www.example.com/");
    

?>