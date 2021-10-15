<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayBlood | Give Blood</title>
    <link rel="stylesheet" href="/projectHCI/css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                <li class="nav-item"><a href="/projectHCI/about.php" class="nav-links">About Us</a></li>
                <li class="nav-item"><a href="/projectHCI/contact.php" class="nav-links">Contacts</a></li>
                <!--<li class="nav-item"><a href="signup.php" class="nav-links">Sign up</a></li>-->
                <li class="nav-item"><a href="login.php" class="nav-links">Login</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <?php if (isset($_SESSION['msg'])) : ?>
        <div class="msg">
            <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?>
        </div>
    <?php endif ?>
    <div class="container">
        <img src="/projectHCI/admin/css/img/blood-donation-facts-benefits-thumb.jpg" alt="">
    </div><br>
    <div class="info-box">
        <h1>How to Donate?</h1>
        <hr><br>
        <h3>How often can person donate?</h3><br>
        <p>A healthy individual can donate every three months</p><br>
        <h3>Will donating blood make a person weak?</h3><br>
        <p>No, it will not make you weak. Donating 450cc wil not cause any ill effects or weaknesses.
            The human body has the capacity to compensate with the new fluid volume. Further, the bone marrow is stimulated
            to produce new blood cells which in turn makes the blood forming organs function more effectively.
        </p><br>
        <h3>How long it will take to donate blood</h3><br>
        <p>The whole process of blood donation, from registration up to recovery, will only take 30 minutes.<br>
            The blood extraction will take about 5-10 minutes. The blood volume will start replenish about 24 hours.
            Theoritically, by the end of the month, the body will have the status before the blood donation.
        </p><br>
        <h3>Can a person who has a tattoo or a body piercer can donate blood?</h3><br>
        <p>If the tattoo or body piercing was done a year ago, he/she can donate blood. This is also applicable on acupuncture, and other
            procedures involving needles.
        </p><br>
        <h3>Will I contact a disease through blood donation</h3><br>
        <p>No, we use sterile, disposable needles and syrenges.</p><br>
    </div>
    <div class="header">
        <h2>Register as Blood Donor</h2>
    </div>
    <form method="post" action="server.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>
            <h2 class="name">Name</h2>
            <input class="firstname" type="text" name="firstName" required placeholder="First Name" value="<?php echo $firstName; ?>">
        </div>
        <div>
            <input class="lastname" type="text" name="lastName" required placeholder="Last Name" value="<?php echo $lastName; ?>">
        </div>
        <div>
            <h2 class="name">Address</h2>
            <input class="address" type="text" name="address" required placeholder="Address" value="<?php echo $address; ?>">
        </div>
        <div>
            <h2 class="name">Blood Type</h2>
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

        </div>
        <div>
            <h2 class="name">Age</h2>
            <input class="age" type="text" name="age" required placeholder="Age" value="<?php echo $age; ?>">
        </div>
        <div>
            <h2 class="name">Mobile Number</h2>
            <input class="mobile-number" type="text" name="number" required placeholder="Mobile Number" value="<?php echo $number; ?>">
        </div>
        <div>
            <h2 class="name">Email</h2>
            <input class="email" type="text" name="email" required placeholder="Email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <button type="submit" name="donate" class="btn-1">Donate</button>
        </div>
    </form>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>Bay</span>Blood</h1>
                <p>
                    BayBlood Bank & And Donation System is a group project of group 2, the purpose of this study is to give
                    information about blood donating and benefits of giving blood.
                </p><br>
                <div class="contact">
                    <span><i class="las la-phone"></i>&nbsp; 123-456-789</span>
                    <span><i class="las la-envelope"></i>&nbsp; bayblood.com</span>
                </div>
            </div>

            <div class="footer-section links"></div>
            <div class="footer-section contact-form"></div>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; bayblood.com | Designed by Group 2
    </div>
</body>

</html>