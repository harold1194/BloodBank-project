<?php include('admin/server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayBlood | Availability</title>
    <link rel="stylesheet" href="css/available.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="nav-main">
        <div class="nav-container">
            <div class="nav-brand" id="mobile-menu">
                <span>BayBlood</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php" class="nav-links">Home</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <center>
        <h1>Search Blood Available</h1>
        <form action="" method="post">
            <h1>BloodType</h1>
            <select name="bloodType" class="option" required>
                <option value="" disabled="disabled" selected="selected">--Choose Blood--</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            <input class="btn" type="submit" name="search" value="Search"/>
        </form>
        <div class="transbox">
            <?php if (isset($_POST['search'])) : ?>
                <h3>Blood Units Available is: <?php echo $count; ?> Unit(s) are available</h3>
            <?php endif ?>
        </div>


    </center>
</body>

</html>