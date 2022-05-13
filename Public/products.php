

<div class="mx-auto posisi">
    <h1>Welcome to Hellenic Bookstore</h1>
    <?php
    $sql = "SELECT Title,Price FROM product";
    $result = $mysqli->query($sql);

    if ($result-> num_rows > 0) 
    {
        while( $row = $result->fetch_assoc())
        {
            //echo "<div class = "col-mod-4 col-sm-6"> Test </div>";
            echo $row["Title"] . " ". $row["Price"] . "<br>"; 
        }
    }
    else 
    {
        echo "0 results";
    }
    ?>

</div>