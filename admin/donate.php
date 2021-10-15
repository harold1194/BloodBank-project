<?php include('server.php');
// if the user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
    header('location: login.php');
}
//fetch the record to be updated
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM donors WHERE id=$id");
    $record = mysqli_fetch_array($rec);

    $firstName = $record['firstName'];
    $lastName = $record['lastName'];
    $address = $record['address'];
    $bloodType = $record['bloodType'];
    $age = $record['age'];
    $number = $record['number'];
    $email = $record['email'];

    $id = $record['id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" href="/projectHCI/admin/css/donate.css">
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
                    <a href="index.php" class="nav_link">
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
                    <a href="donate.php" class="nav_link active">
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
    <?php if (isset($_SESSION['msg'])) : ?>
        <div class="msg">
            <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?>
        </div>
    <?php endif ?>
    <div class="card-body">
        <div class="heading">
            <h2>Donor Register</h2>
        </div>
        <form method="post" action="server.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <h2 class="name">Name:</h2>
                <input class="firstname" type="text" name="firstName" required placeholder="First Name" value="<?php echo $firstName; ?>">
            </div>
            <div>
                <input class="lastname" type="text" name="lastName" required placeholder="Last Name" value="<?php echo $lastName; ?>">
            </div>
            <div>
                <h2 class="name">Address:</h2>
                <input class="address" type="text" name="address" required placeholder="Address" value="<?php echo $address; ?>">
            </div>
            <div>
                <h2 class="name">Blood Type:</h2>
                <select name="bloodType" class="option">
                    <option disabled="disabled" selected="selected">--Choose Blood--</option>
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
                <h2 class="name">Age:</h2>
                <input class="age" type="text" name="age" required placeholder="Age" value="<?php echo $age; ?>">
            </div>
            <div>
                <h2 class="name">Mobile Number:</h2>
                <input class="mobile-number" type="text" name="number" required placeholder="Mobile Number" value="<?php echo $number; ?>">
            </div>
            <div>
                <h2 class="name">Email:</h2>
                <input class="email" type="text" name="email" required placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <div>
                <?php if ($edit_state == false) : ?>
                    <button type="submit" name="save" class="btn">Save</button>
                <?php else : ?>
                    <button type="submit" name="update" class="btn">Update</button>
                <?php endif ?>
            </div>
        </form><br>
        <table>
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Address</td>
                    <td>Blood Type</td>
                    <td>Age</td>
                    <td>Mobile Number</td>
                    <td>Email</td>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['firstName'] ?></td>
                        <td><?php echo $row['lastName'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['bloodType'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><?php echo $row['number'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td>
                            <a class="edit_btn" href="donate.php?edit=<?php echo $row['id']; ?>">EDIT</a>
                        </td>
                        <td>
                            <a class="del_btn" href="server.php?del=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
<script src="js/main.js"></script>

</html>