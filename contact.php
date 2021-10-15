<?php include('admin/server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayBlood | Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>
    <nav class="nav-main">
        <div class="nav-container">
            <div class="nav-brand" id="mobile-menu">
                <span>BayBlood</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php" class="nav-links">Donate</a></li>
                <li class="nav-item"><a href="/projectHCI/admin/giveblood.php" class="nav-links">Give Blood</a></li>
                <li class="nav-item"><a href="/projectHCI/about.php" class="nav-links">About Us</a></li>
                <li class="nav-item"><a href="" class="nav-links">Contacts</a></li>
                <!--<li class="nav-item"><a href="/projectHCI/admin/signup.php" class="nav-links">Sign up</a></li>-->
                <li class="nav-item"><a href="/projectHCI/admin/login.php" class="nav-links">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="contact-title">

        <h1>Say Hello</h1>
        <h2>We are always here to serve you!</h2>

        <?php if (isset($_SESSION['msg'])) : ?>
            <div class="msg">
                <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                ?>
            </div>
        <?php endif ?>

    </div>

    <div class="contact-form">
        <form method="post" action="admin/server.php">
            <input type="text" name="fullname" class="form-control" placeholder="Full Name" required><br>
            <input type="text" name="email" class="form-control" placeholder="Email" required><br>
            <textarea name="messages" class="form-control" placeholder="Message" id="" rows="4" required></textarea><br>
            <input type="submit" name="send" class="form-control submit" value="SEND MESSAGE">
        </form>
    </div>
</body>

</html>