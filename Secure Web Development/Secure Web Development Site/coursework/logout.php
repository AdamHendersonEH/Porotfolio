<?php
// start the users session
session_start();
// unset the session
session_unset();
//destroy the session
session_destroy();
// send the user back to the homepage
header("Location: index.php")
//end session

//redirect user to index.php
//header("Location: http://www.example.com/");
?>