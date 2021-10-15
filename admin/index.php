<?php include('server.php');
// if the user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>

        <div class="header_img">
            <img src="/projectHCI/css/img/g2.jpg" alt="admin">
        </div>
    </header>

    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">BayBloodBank</span>
                </a>

                <div class="nav_list">
                    <a href="index.php" class="nav_link active">
                        <i class='bx bx-home-heart nav_icon'></i>
                        <span class="nav_name">Home</span>
                    </a>
                    <a href="donor.php" class="nav_link">
                        <i class='bx bx-donate-blood nav_icon'></i>
                        <span class="nav_name">Donors</span>
                    </a>
                    <a href="bloodrequest.php" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Blood Request</span>
                    </a>
                    <a href="donate.php" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Donors Data</span>
                    </a>

                </div>
            </div>
            <?php if (isset($_SESSION["username"])) : ?>
                <a href="index.php?logout='1'" class="nav_link">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">Logout</span>
                </a>
            <?php endif ?>

        </nav>
    </div>
    <div class="main-content">
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>
                            <?php echo $count; ?>
                        </h1>
                        <span>Donors</span>
                    </div>
                    <div>
                        <span class="bx bx-donate-blood nav_icon"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>
                            <?php echo $count; ?>
                        </h1>
                        <span>Donor-List</span>
                    </div>
                    <div>
                        <span class="bx bx-clipboard nav_icon"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo $counts; ?></h1>
                        <span>Blood Orders</span>
                    </div>
                    <div>
                        <span class="bx bx-shopping-bag nav_icon"></span>
                    </div>
                </div>

                <div class="card-single">
                    
                </div>
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Donors</h3>

                            <button><a href="donor.php"></a>See all<span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Address</td>
                                        <td>Blood Type</td>
                                        <td>Age</td>
                                        <td>Mobile Number</td>
                                        <td>Email</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['id'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['firstName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['lastName'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['address'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['bloodType'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['age'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['number'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['email'] ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="js/main.js"></script>

</html>