<h2>Cart</h2>
<table class="table table-hover">
	<thead>
		<tr>
<<<<<<< HEAD
			<th>Thumbnail</th>
			<th></th>
=======
>>>>>>> 6261026ca50e34c392b37e7f64b9888b3cfef183
			<th>Product</th>
			<th>Quantity</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<?php
	if (!is_array($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}

	if (count($_SESSION['cart']) == 0) {
<<<<<<< HEAD
		print "<br><center> <h2>Your Cart is empty</h2></center><br>";
=======
		print "Your Cart is empty!!!!";
>>>>>>> 6261026ca50e34c392b37e7f64b9888b3cfef183
		return;
	} else {
		$sql = "select * from product where ID=?";
		$stmt = $mysqli->prepare($sql);

		$sum = 0;
		$c = 0;
		foreach ($_SESSION['cart'] as $p => $q) {
			$stmt->bind_param("i", $p);
			$stmt->execute();
			$result = $stmt->get_result();
			$row = $result->fetch_assoc();
<<<<<<< HEAD
			print "<tr><td><img style ='width:60px' src='Assets/img/BookCover/$row[ID].jpg'></td><td> <td> <a href= '?p=productinfo&pid=$row[ID]'>$row[Title]  </td><td> $q * {$row['Price']}&euro; </td><td>=" . ($q * $row['Price']) . "&euro; </td></tr>";
		
=======
			print "<tr><td>$row[Title]  </td><td> $q * {$row['Price']}&euro; </td><td>=" . ($q * $row['Price']) . "&euro; </td></tr>";
>>>>>>> 6261026ca50e34c392b37e7f64b9888b3cfef183
			$sum += ($q * $row['Price']);
			$c++;
		}
		if ($c == 0) {
<<<<<<< HEAD
			print "<tr><td colspan='3'> <br><center> <h2>Your Cart is empty</h2></center><br></td></tr>
			<center>
				<a href='?p=products' class='btn btn-primary'>Back to products</a>	
				</center>";
		}
		print "<tr><th>Total<td><td><td> <td>$sum &euro;</th></tr></table>";

		if ($c > 0) {
			print "<center><a href='?p=buy_cart' class='btn btn-primary'>Submit order</a>
				<a href='?p=empty_cart' class='btn btn-primary'>Delete  Cart</a> 
				<a href='?p=products' class='btn btn-primary'>Back to products</a>	
				</center>";
=======
			print "<tr><td colspan='3'>Your Cart is empty :-(</td></tr>";
		}
		print "<tr><td>Total<td><td>$sum &euro;</td></tr></table>";

		if ($c > 0) {
			print "<a href='?p=buy_cart' class='btn btn-primary'>Submit order</a>
				<a href='?p=empty_cart' class='btn btn-primary'>Delete  Cart</a>	";
>>>>>>> 6261026ca50e34c392b37e7f64b9888b3cfef183
		}
	}
	?>