<!DOCTYPE html>
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


    <div class="card mx-auto" style="width: 25rem;">
        <div class="d-flex justify-content-center">
            <h4>Sign-up Hellenic Bookstore</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="index.php" class="card-text">
                <div class="form-group">
                    <label>Username: </label>
                    <input type="username" name="uname" placeholder="Enter Username" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" name="passwd_enc" placeholder="Enter Password" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Firstname: </label>
                    <input type="text" name="Fname" placeholder="Enter Firstname" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Lastname: </label>
                    <input type="text" name="Lname" placeholder="Enter Lastname" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone: </label>
                    <input type="text" name="Phone" placeholder="Enter Phone Number" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Address: </label>
                    <input type="text" name="Address" placeholder="Enter Address" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="Email" placeholder="Enter Email" required class="form-control">
                </div>
                <br>
                <input type="submit" value="Submit" name="submit" class="btn btn-primary ">
                <input type="number" value="0" hidden>

            </form>
        </div>
    </div>


</body>

</html>