<?php
if (isset($_GET["error"])) {
    $error = $_GET["error"];
    if ($error == "UP") {
        echo '<div class="alert alert-danger 
        alert-dismissible fade show" role="alert" id="popup">
        <strong>Success!</strong> Wrong password or username! 
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button> 
    </div> ';
    }
}
?>

<div class="mx-auto posisi" style="width: 270px;">
    <div class="card" style="width: 22rem;">
        <img src="Assets/img/Logo.jpg" class="card-img-top mx-auto" alt="Logo">
        <div class="card-body">
            <h5 class="card-title text-center">Sign-In Hellenic Bookstore</h5>
            <form action="/bookstore/Public/do_login.php" method="GET">
                <div class="form-group">
                    <label>Username: </label>
                    <input name="Username" placeholder="Enter Username" class="form-control" type="text" />

                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input name="Password" type="password" placeholder="Enter Password" class="form-control" />
                </div>
                <input type="submit" value="LOGIN" class="btn btn-primary" />
                <input name="p" value="do_login" type="hidden">
            </form>
            <p class="spacing">Don't you have an account?<span><a href="/bookstore/Public/signup.php"> Sign up </a></span></p>
        </div>
    </div>
</div>