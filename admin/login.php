<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayBlood | Login</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <nav class="nav-main">
        <div class="nav-container">
            <div class="nav-brand" id="mobile-menu">
                <span>BayBlood</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="/projectHCI/index.php" class="nav-links">Donate</a></li>
                <li class="nav-item"><a href="giveblood.php" class="nav-links">Give Blood</a></li>
                <li class="nav-item"><a href="/projectHCI/about.php" class="nav-links">About</a></li>
                <li class="nav-item"><a href="/projectHCI/contact.php" class="nav-links">Contacts</a></li>
                <!--<li class="nav-item"><a href="signup.php" class="nav-links">Sign up</a></li>-->
                <li class="nav-item"><a href="login.php" class="nav-links">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="head1">
        <h1>Bay Blood Bank & Donation Managment System</h1><br>
        <p>BBB is a community blood center that connects local donors to local patients through blood donation.</p>
    </div>
    <div class="header">
        <h2>Admin Login</h2>
    </div>
    <form method="post" action="login.php">
        <!--Display validation errors here-->
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <!--<p>
            Not yet a member? <a href="signup.php">Register</a>
        </p>-->
    </form>
</body>

</html>