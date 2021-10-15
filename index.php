<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0" />
    <title>Bay Blood Bank</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                <li class="nav-item"><a href="about.php" class="nav-links">About Us</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-links">Contacts</a></li>
                <!--<li class="nav-item"><a href="/projectHCI/admin/signup.php" class="nav-links">Sign up</a></li>-->
                <li class="nav-item"><a href="/projectHCI/admin/login.php" class="nav-links">Login</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="banner">
        <br>
        <h1>Welcome to Bay Blood Bank And Donation System</h1><br>
    </div>
    <!--Gallery-->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="css/img/Blood-facts.png" alt="blood facts image">
        </div>
        <div class="mySlides fade">
            <img src="css/img/GiveBlood.jpg" alt="give blood image">
        </div>
        <div class="mySlides fade">
            <img src="css/img/post-img.jpg" alt="post image">
        </div>
        <!-- The dots/circles -->
        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <br>

    <div class="boxes">
        <div class="box">
            <h1>Why Donate with Bay Blood Bank?</h1><br>
            <p>BBB is a community blood center that connects local donors to local patients through blood donation. We are a leader
                in the fields of transfusion and transplantation medicine, supplying essential blood products, testing and transplant
                matching services to several Bay Area hospitals.<br>At Bay Blood Center, we love our donors! Through mobile blood
                drives, education and partnerships, we connect our community, celebrating our dedicated blood donors and encouraging
                first-time donors to become real-life heroes.
            </p>
        </div>
    </div>
    <div class="container-1">
        <a class="btn" href="admin/giveblood.php">Make Appointment</a><br>
        <a class="btn" href="availability.php">Search Blood</a><br>
        <a class="btn" href="admin/giveblood.php">Membership Signup</a><br>
        <img src="css/img/quote.jpg" alt="">
    </div>
    <div class="content-1">
        <h2>Blood Donation: How it Works?</h2><br>
        <div class="content-info-1">
            <img src="css/img/Preparing-to-donate.jpg" alt="Prepare to donate">
        </div>
        <div class="info-1">
            <h3>Before your Appointment:</h3><br>
            <ul>
                <li>Always be sure to drink plenty of water before donating blood!</li>
                <li>Eat an iron-rich meal. Eating enough iron is essential to ensuring that your hemoglobin level is right for donating. </li>
                <li>Bring your donor ID. If you have a donor ID, be sure to bring it with you to your appointment. First-time donors or returning donors without a donor ID card should bring a valid state-issued photo identification.</li>
            </ul><br>
            <p>Avoid alcohol and fatty foods for 24 hours, and aspirin (if donating platelets) for 48 hours, before your donation.</p>
        </div>
    </div>
    <div class="content-2">
        <div class="content-info-2">
            <img src="css/img/post-donation.jpg" alt="post donation">
        </div>
        <div class="info-2">
            <h3>After your Blood Donation</h3><br>
            <ul>
                <li>Always be sure to drink plenty of water to rehydrate.</li>
                <li>Sit down or lie down if you feel lightheaded or dizzy. Call our post-donation callback line at (650) 725-9968 if you feel unwell.</li>
                <li>Rest and replenish iron. We recommend you take an iron supplement and/or eat foods rich in iron combined with a source of vitamin C after your donation.</li>
            </ul>
            <p>Avoid alcoholic beverages and vigorous exercise for at least 24 hours after donating, and be sure to keep that bandage on for a few hours!</p>
        </div>
    </div><br><br><br><br>
    <!--footer-->
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
<script src="js/slide.js"></script>

</html>