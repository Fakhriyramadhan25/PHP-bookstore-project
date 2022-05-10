<?php require "dbconnect.php"; ?>

<div class="container posisi">
    <h2>My Wishlist</h2>
    <div class="row">
        <div class="col-md-8 col-sm-6 border rounded bg-white">
            <?php
            // taking session from product
            // if (isset($_SESSION['cart'])) {
            //     $product_id = array_column($_SESSION['cart'], 'product_id');}
            $query = "SELECT ID, Title, Price, Yearpublished, bookcover FROM product";
            $stmt1 = $mysqli->prepare($query);
            $stmt1->execute();
            $result1 = $stmt1->get_result();
            if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
                    echo $row['Title'] . "<br>";
                }
            }

            ?>
        </div>
        <div class="col-md-4 col-sm-6"></div>

    </div>
</div>