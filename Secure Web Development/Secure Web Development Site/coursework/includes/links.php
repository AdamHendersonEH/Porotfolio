

<ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="history.php">History</a></li>
        <li class="nav-item"><a class="nav-link" href="teamMembers.php">Team Members</a></li>
        <li class="nav-item"><a class="nav-link" href="req.php">Requirements</a></li>

        <!--only show if user is not signed in-->
        <?php
        ob_start();
        session_start();
        if (!isset ($_SESSION['username'])&&!isset($_SESSION['userId']))
        {
        echo '<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
        };
        if (isset($_SESSION['username'])&&isset($_SESSION['userId'])){
        //<!--only show if authenticated user is signed in-->
        echo '<li class="nav-item"><a class="nav-link" href="userProfile.php">User Profile</a></li>';
        echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
        };
        ?>
</ul>
