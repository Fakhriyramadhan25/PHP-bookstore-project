<div class="mx-auto posisi" style="width: 270px;">
    <div class="card" style="width: 22rem;">
        <img src="Assets/img/Logo.jpg" class="card-img-top mx-auto" alt="Logo">
        <div class="card-body">
            <h5 class="card-title text-center">Sign-In Hellenic Bookstore</h5>
            <form method="post" action="index.php">
                <label>Username: </label>
                <br>
                <input name="username" placeholder="Enter Username" />
                <br />
                <label>Password: </label>
                <br>
                <input name="pass" type="password" placeholder="Enter Password" />
                <br />
                <input type="submit" value="LOGIN" class="btn btn-primary" />
                <input name="p" value="do_login" type="hidden">
            </form>
            <p class="spacing">Don't you have an account?<span><a href="/bookstore/Public/signup.php" class=""> Sign up </a></span></p>
        </div>
    </div>
</div>