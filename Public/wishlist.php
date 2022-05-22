<?php require "dbconnect.php";

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    unset($_SESSION['wlist']);
    header("Location: account.php?p=wishlist");
}

?>


<div class="container posisi">
    <h2>My Wishlist</h2>
    <div class="row">
        <div class="col-md-8 col-sm-6 border rounded bg-white">
            <?php
            if (!is_array($_SESSION['wlist'])) {
                $_SESSION['wlist'] = array();
            }

            if (count($_SESSION['wlist']) == 0) {
                print "There is no wishlist";
                return;
            } else {
                $sql = "select * from product where ID=?";
                $stmt = $mysqli->prepare($sql);

                $c = 0;
                foreach ($_SESSION['wlist'] as $p => $q) {
                    $stmt->bind_param("i", $p);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();
                    print '
                    <div class="card-body">
                    <img class="card-img-top" src="Assets/img/BookCover/' . $row["Bookcover"] . '">
    <p class="card-text">' . $row["Title"] . ' <span><a class="delete" href="account.php?p=wishlist&action=delete"> [X] </a></span></p> 
  </div>
                    ';
                }
            }
            ?>

        </div>
        <div class="col-md-5">
        </div>
    </div>
</div>