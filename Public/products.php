

<div class="mx-auto posisi">
     <h1>Welcome to Hellenic Bookstore</h1>
 <table class='table table-striped'>
    <?php
   // $cat = $_REQUEST['catid'];
    $limit = 5;
    $page = isset($_GET["page"]) ? $_GET["page"] : 1;
    $start = ($page - 1) * $limit; 

    $sql = "SELECT ID,Title,Price FROM product LIMIT $start, $limit ";
    $result = $mysqli->query($sql);

    $result1 = $mysqli->query("SELECT count(ID) As id FROM product);
    $resultcount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $custcount[0]['ID']; 
    $pages = ceil ($total / $limit);

    if ($result -> num_rows > 0) 
    {   
        print"<tr> 
            <th> Name </th>
            <th> Price </th>
            </tr>"
            print "
            <nav aria-label="Page navigation">
               <ul class="pagination">
               <li>
                 <a href="products.php?page=<?= $Previous; ?>" aria-label="Previous">
                   <span aria-hidden="true">&laquo; Previous</span>
                 </a>
               </li>"
               for($i = 1; $i<= $pages; $i++)
               {
                  print "<li><a href="products.php?page=<?= $i; ?>"><?= $i; ?></a></li>"
               }
   
               print" <li>
                 <a href="products.php?page=<?= $Next; ?>" aria-label="Next">
                   <span aria-hidden="true">Next &raquo;</span>
                 </a>
               </li>"
             print"</ul>
           </nav>"    
        while( $row = $result->fetch_assoc())
        {

            print "<tr>
                <td> <img style ='width:60px' src='Assets/img/BookCover/$row[ID].jpg'><td> ".
                "<td> <a href= '?p=productinfo&pid=$row[ID]'>$row[Title]</a></td>".
                "<td>$row[Price] &euro; </td>  
                </tr> "; 
        }
    }
    else 
    {
        echo "0 results";
    }
    ?>
    </table>
</div>