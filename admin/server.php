<?php
    session_start();
    //initialize variable
    $fullname = "";
    $messages = "";

    $firstName = "";
    $lastName = "";
    $address = "";
    $bloodType = "";
    $age = "";
    $number = "";
    $email = "";
    
    $id = 0;
    $edit_state = false;

    $username = "";
    $email = "";
    $errors = array();
    
    //connect to donor database
    $db = mysqli_connect('localhost','root','','donors_sample_db');
    //if the register button is clicked
    if (isset($_POST['register'])) {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

        // ensure that form field are filled properly
        if (empty($username)) {
            array_push($errors, "Username is required"); // add error to errors array
        }
        if (empty($email)) {
            array_push($errors, "Email is required"); // add error to errors array
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required"); // add error to errors array
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // if there are no errors, save user to database
        if (count($errors) == 0) {
            $password = md5($password_1); // encrypt password before storing in database
            $sql = "INSERT INTO users (username, email, password) 
                VALUES ('$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            //$_SESSION['success'] = "You are now logged in";
            header('location: login.php'); //redirect to login page
        }
    }
    // log user in from login page
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // ensure that form field are filled properly
        if (empty($username)) {
            array_push($errors, "Username is required"); // add error to errors array
        }
        if (empty($password)) {
            array_push($errors, "Password is required"); // add error to errors array
        } 
        if (count($errors) == 0) {
            $password = md5($password); // encrypt password before comparing to database
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1) {
                // login user in
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php'); //redirect to home page
            }
            else {
                array_push($errors, "Wrong username and password combination!");
            }
        }
    }
    //insert into donor database
    if (isset($_POST['save'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $bloodType = $_POST['bloodType'];
        $age = $_POST['age'];
        $number = $_POST['number'];
        $email = $_POST['email'];

        $query = "INSERT INTO donors (firstName, lastName, address, bloodType, age, number, email) 
                    VALUES ('$firstName', '$lastName', '$address', '$bloodType', '$age', '$number', '$email')";
        mysqli_query($db, $query);
        $_SESSION['msg'] = "Record Saved";
        header('location:donate.php');
    }
    if (isset($_POST['donate'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $bloodType = $_POST['bloodType'];
        $age = $_POST['age'];
        $number = $_POST['number'];
        $email = $_POST['email'];

        $query = "INSERT INTO donors (firstName, lastName, address, bloodType, age, number, email) 
                        VALUES ('$firstName', '$lastName', '$address', '$bloodType', '$age', '$number', '$email')";
        mysqli_query($db, $query);
        $_SESSION['msg'] = "Record Saved";
        header('location:giveblood.php');
    }
    //update records
    if (isset($_POST['update'])) {
        $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $bloodType = mysqli_real_escape_string($db, $_POST['bloodType']);
        $age = mysqli_real_escape_string($db, $_POST['age']);
        $number = mysqli_real_escape_string($db, $_POST['number']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $id = mysqli_real_escape_string($db, $_POST['id']);

        mysqli_query($db, "UPDATE donors SET firstName='$firstName', lastName= '$lastName', address='$address', bloodType='$bloodType', age='$age', 
                        number='$number' WHERE id='$id'");
        $_SESSION['msg'] = "Record Updated";
        header('location:donate.php');
    }
    //delete records
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM donors WHERE id=$id");
        $_SESSION['msg'] = "Record Deleted";
        header('location:donate.php');
    }
    //retrieve records
    $results = mysqli_query($db, "SELECT * FROM donors");
    // log out
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
    //count items in records
    $sql = "SELECT COUNT(*) FROM donors";
    $result = mysqli_query($db, $sql);
    $count = mysqli_fetch_assoc($result)['COUNT(*)'];

    //search from database
    if (isset($_POST['search'])) {
        $bloodType = $_POST['bloodType'];
        $sql = "SELECT COUNT(*) FROM donors WHERE bloodType='$bloodType'";
        $result = mysqli_query($db, $sql);
        $count = mysqli_fetch_assoc($result)['COUNT(*)'];
    }
    //send message
    if (isset($_POST['send'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $messages = $_POST['messages'];

        $query = "INSERT INTO contacts (fullname,email,messages) VALUES ('$fullname', '$email', '$messages')";
        mysqli_query($db,$query);
        $_SESSION['msg'] = "Message Sent";
        header('location: /projectHCI/contact.php');
    }
    //count items in contact records
    $sql = "SELECT COUNT(*) FROM contacts";
    $result = mysqli_query($db, $sql);
    $counts = mysqli_fetch_assoc($result)['COUNT(*)'];

    //retrieve contact records
    $result = mysqli_query($db, "SELECT * FROM contacts");
?>

