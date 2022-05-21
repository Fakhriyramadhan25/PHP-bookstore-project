<?php
$showAlert = false;
$showError = false;
$exists = false;

// include the database connection
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Variable decleration
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $cpassword = $_POST["Cpassword"];
    $email = $_POST["Email"];
    $firstname = $_POST["Firstname"];
    $lastname = $_POST["Lastname"];
    $phone = $_POST["Phone"];
    $address = $_POST["Address"];
    $admin = $_POST["admin"];

    // Check if the username has already existed in the database
    $query = "SELECT * FROM customer WHERE uname='$username'";

    // Request for querying
    $result = mysqli_query($mysqli, $query);

    // return numbers of rows that has the same username
    $user_check = mysqli_num_rows($result);

    if ($user_check == 0) {
        if ($password == $cpassword && $exists == false) {
            // password hashing so that it will be encrypted
            // $hash = password_hash($password, PASSWORD_BCRYPT);
            $query1 = "INSERT INTO customer (Email, uname, Fname,Lname,Phone,passwd_enc,is_admin,Address) VALUES ('$email','$username','$firstname','$lastname','$phone','$password','$admin','$address')";
            $result1 = mysqli_query($mysqli, $query1);

            if ($result1) {
                $showAlert = true;
                header('Location: ../index.php?sup=true');
                exit;
            }
        } else {
            $showError = "Password do not match";
        }
    }
    if ($user_check > 0) {
        $exists = "Your username cannot be used";
    }
}
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- tab icon -->
    <link rel="icon" href="Assets/img/Logo.jpg">

    <title>Hellenic Bookstore</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <!-- bootstrap 4.6 -->
    <link href="../Assets/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- css details -->
    <link href="../Assets/css/signup.css" rel="stylesheet">

    <!-- ajax -->
    <script src="Assets/js/ajax.js"></script>

</head>

<body>
    <?php

    if ($showError) {

        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> ' . $showError . '
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> ';
    }

    if ($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> ' . $exists . '
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> ';
    }

    ?>

    <div>
        <a href="/bookstore/index.php">
            <img src="../Assets/img/backicon.png" alt="Back Icon" class="btn-back">
        </a>
    </div>

    <div class="card mx-auto" style="width: 25rem;">
        <div class="d-flex justify-content-center">
            <h4>Sign-up Hellenic Bookstore</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="signup.php" class="card-text">
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="Email" placeholder="Enter Email" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Username: </label>
                    <input type="username" name="Username" placeholder="Enter username" required class="form-control" id="Username">
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" name="Password" placeholder="Enter password" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Retype Password: </label>
                    <input type="password" name="Cpassword" placeholder="Retype password" required class="form-control">
                </div>
                <div class="form-group">
                    <label>First name: </label>
                    <input type="text" name="Firstname" placeholder="Enter first name" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Last name: </label>
                    <input type="text" name="Lastname" placeholder="Enter last name" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone: </label>
                    <input type="text" name="Phone" placeholder="Enter phone number" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Address: </label>
                    <input type="text" name="Address" placeholder="Enter address" required class="form-control">
                </div>
                <input type="submit" value="Submit" name="submit" class="btn btn-primary ">
                <input type="number" value="0" hidden name="admin">

            </form>
        </div>
    </div>


    <!-- Jquery 3.5.1  -->
    <script src="../Assets/bootstrap/jquery-3.5.1.min.js"></script>

    <!-- bootstrap 4.6 javascript  -->
    <script src="../Assets/bootstrap/bootstrap.min.js"></script>

    <!-- popper 1.16.1 for interactive  -->
    <script src="../Assets/bootstrap/popper-1.16.1.min.js"></script>

</body>

</html>