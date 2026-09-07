<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CMP204 Unit Two Coursework Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src="javascript/script.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Save Point Summit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <?php include_once "includes/links.php" ?>
  </div>
</nav>
  <div class="container-fluid">
    <h1>CMP204 Requirements Page - Unit 2 Assessment</h1>
    
    <p>If you have not met a requirement, do not delete it from the table.</p>

        <table id="reqTable">
        <thead>
            <tr>
            <th class="reqCol">Requirement</th>
            <th class="metCol">How did you meet this requirement?</th>
            <th class="fileCol">File name(s), line no.</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <td>HTML5, CSS, JavaScript has been contained within separate files.</td>
            <td>All files of different types have been contained in their own files, .php files are exclusively for html5 and php, all javascript, jquery and ajax is contained within the javascript.js file and all css styling is contained within the style.css file</td>
            <td>all files.</td>
            </tr>

            <tr>
            <td>Use of the Bootstrap framework providing a responsive layout.</td>
            <td>Bootstrap was used in almost all .php  files to create a responsive layour by containing most of the body elements within a fluid container so that they match with the size of the display. It was also used in all files as its grid system to seperate the page into 2 distinct columns.</td>
            <td>index.php, lines 16-53, req.php, lines 13-113, userProfile.php, lines 15-105, register.php, lines 16-58, login.php, lines 14-40, teamMembers.php, lines 14-49, history.php, lines 14-40 </td>
            </tr>

            <tr>
            <td>Use of JavaScript to manipulate the DOM based on an event.</td>
            <td>Creates and appends a text node to manipulate the dom to show more text on the screen when the user clicks the read more button</td>
            <td>history.php, Line 30-31. And in script.js on lines 9-27.</td>
            </tr>            
            
            <tr>
            <td>Use of jQuery in conjunction with the DOM.</td>
            <td>Uses jQuery to hide the appended text by manipulating the DOM after the user has clicked the read less button.</td>
            <td>history.php, line 30-31. And in script.js on lines 31-40</td>
            </tr>

            <tr>
            <td>Use of AJAX (pure JavaScript i.e. without the use of a library).</td>
            <td>Ajax is used to replace the text about the team members of the convention with their names and roles and favourite game.</td>
            <td>teamMembers.php, lines 27-28 script.js, lines 37-49, teamInfo.txt, all lines</td>
            </tr>

            <tr>
            <td>Use of the jQuery AJAX function.</td>
            <td>This is used to add in new text which is pulled from a .txt file that shows how to contact the owner of Save Point Summit.</td>
            <td>teamMembers.php, lines 42-43, script.js, lines 66-76, contact.txt, all lines</td>
            </tr>

            <tr>
            <td>User login functionality (PHP/MySQL).</td>
            <td>The user is asked to submit data into either a register or login form and submit, this data is then passed using POST to the processing pages where it is sanitised and hashed and checked against all other database entries (Login) or inserted into the database for a new user. A session is then started. The user can click the logout button to destroy their session and log out.</td>
            <td>login.php, lines 28-35, register.php, lines 30-43, processLogin.php, all lines, processRegistration.php, all lines, logout.php, all lines</td>
            </tr>

            <tr>
            <td>Ability to select (SELECT), add (INSERT), edit (UPDATE) and delete (DELETE) information from a database (PHP/MySQL).</td>
            <td>The ability to select information from the database is used to compare login details, and userId's to eventId's as a foreign key to view the users attended events. Insert has been used to register new users and to add new events that the user has attended. Update has been use to edit the users attended events. Delete has been used to allow the user to delete events they have attended.</td>
            <td>userProfile.php, lines 38-99, addEventsAttended.php, all lines, editEventsAttended.php, all lines, deleteEventsAttended.php, all lines, processRegistration.php, all lines, processLogin.php, all lines, register.php, lines 30-43, login.php, lines 28-35.</td>
            </tr>

            <tr>
            <td>Inclusion of GDPR.</td>
            <td>A written GDPR form is included on the page which the user must click a button before registering to accept and create an account ensuring they read and understand the GDPR policy in its entirety.</td>
            <td>register.php, lines 44-56</td>
            </tr>

            <tr>
            <td>SQL queries written as prepared statements.</td>
            <td>All SQL queries are written as prepared statements to add, delete or edit events and to login or register in order to prevent any potential SQL injection attacks.</td>
            <td>addEventsAttended.php, lines 28-40, editEventsAttended.php, lines 18-33, deleteEventsAttended.php, lines 15-30, processLogin.php, lines 23-63, processRegistration.php, lines 23-65 </td>
            </tr>

            <tr>
            <td>Passwords should be salted and hashed.</td>
            <td>Passwords are salted and hashed using built-in php function password_hash which returns the salt and hash, this is done whilst processing user logins or registration.</td>
            <td>processRegistration.php, line 12, processLogin.php, line 11</td>
            </tr>

            <tr>
            <td>User input should be sanitised.</td>
            <td>All data taken in by the forms to log in, register, add events attended, edit events attended and delete events attended have functions to trim all whitespace, strip slashes and to convert any special characters into html special characters when  they are taken in.</td>
            <td>processLogin.php, lines 17-20, processRegistration.php, lines 17-20, addEventsAttended.php, lines 15-18, editEventsAttended.php, lines 13-16, deleteEventsAttended.php, lines 10-13</td>
            </tr>
        </tbody>



        </table>
  </div>
    <!-- jQuery library -->
		<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Latest compiled Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>