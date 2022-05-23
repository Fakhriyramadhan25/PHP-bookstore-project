<div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <h1 class="mainTitle text-center" style="margin:0px 0px 0px 0px;"> New In </h1>
        <p class="text-center">The latest collection in our shop</p>
        
        <!-- Carousel section -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">            
                <?php
                
                $sql = "select * from product where ClassficiationBooks='New'";
                $stmt1 = $mysqli->prepare($sql);
                $stmt1->execute();
                $result1 = $stmt1->get_result();
                $row = $result1->fetch_assoc();
                print "
                    <div class='carousel-item active'>
                    <a href='?p=productinfo&pid=$row[ID]' target=_blank>
                    <img class='d-block mx-auto carouselImg' src='Assets/img/BookCover/$row[Bookcover]' alt='slide' />
                    </a>
                    </div>
		        ";
                
                while ($row1 = $result1->fetch_assoc()) {
                print "
                    <div class='carousel-item'>
                    <a href='?p=productinfo&pid=$row1[ID]' target=_blank>
                    <img class='d-block mx-auto carouselImg' src='Assets/img/BookCover/$row1[Bookcover]' alt='slide' />
                    </a>
                    </div>
		        ";
	            }
                
                ?>

                 </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>

    <div class="row align-items-start" style="margin-top: 80px;">
    <div class="col-md-12">
        <h2 class="mainTitle text-center">Best Seller </h2>
        <p class="text-center">All time best selling books from our customers</p>
        <!-- Card display section-->
        <div class="card-deck">
        <?php
        $sql = "select * from product where ClassficiationBooks='Best Seller'";
            
        $stmt1 = $mysqli->prepare($sql);
	    $stmt1->execute();
	    $result1 = $stmt1->get_result();
        while ($row1 = $result1->fetch_assoc()) {
        print <<<END
            <div class="card">
            
            <img class="card-img-top rounded mx-auto " style="height: 180px; width: auto; margin-top:10px; margin-bottom:5px;" src="Assets/img/BookCover/$row1[Bookcover]" alt="$row1[Title]"/>
            
            <div class="card-body">
            <p class="card-title text-center">
            <a class=" text-dark" href='?p=productinfo&pid=$row1[ID]' target=_blank> $row1[Title] </a>
            </p>
            </div>
            </div>
            END;
            }
        ?>
        </div> 

    </div>
    </div>

    <div class="row align-items-start" style="margin-top: 80px;  margin-bottom: 30px">
    <div class="col-md-12">
        <h2 class="mainTitle text-center">Trending</h2>
        <p class="text-center">Top 5 picks from our customers</p>
        <!-- Card display section-->
        <div class="card-deck">
        <?php
        $sql = "select * from product where ClassficiationBooks='Trending'";
            
        $stmt1 = $mysqli->prepare($sql);
	    $stmt1->execute();
	    $result1 = $stmt1->get_result();
        while ($row1 = $result1->fetch_assoc()) {
        print <<<END
            <div class="card">
            
            <img class="card-img-top rounded mx-auto " style="height: 180px; width: auto; margin-top:10px; margin-bottom:5px;" src="Assets/img/BookCover/$row1[Bookcover]" alt="$row1[Title]"/>
            
            <div class="card-body">
            <p class="card-title text-center">
            <a class=" text-dark" href='?p=productinfo&pid=$row1[ID]' target=_blank>$row1[Title]</a>
            </p>
            </div>
            </div>
            END;
            }
        ?>
        </div> 
    </div>
    </div>
</div>



