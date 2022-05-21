<?php
$pid = $_REQUEST['pid'];
$sql = "select * from product where ID=?";


if ($stmt = $mysqli->prepare($sql)) {
	$stmt->bind_param("i", $pid);
	$stmt->execute();
	$result = $stmt->get_result();
	print "<table class='table table-striped table-bordered'>";

	while ($row = $result->fetch_assoc()) {
		print <<<END
			<div class='container mx-auto'>
				<div class='panel panel-default'>
					<tr>
					<th></th>
					<td><img width=200px src='Assets/img/BookCover/$row[Bookcover]' class="mx-auto d-block"></td>
					</tr>
					<tr>
					<th>Title</th>
					<td><div class='panel-heading font-weight-bold'> $row[Title]</div></td>
					</tr>
					<tr>
					<th>Genre</th>
					<td><div class='panel-heading'>$row[Genre]</div></td>
					</tr>
					<tr>
					<th>ISBN</th>
					<td><div class='panel-heading'>$row[ISBN]</div></td>
					</tr>
					<tr>
					<th>Publisher</th>
					<td><div class='panel-heading'>$row[Publisher]</div></td>
					</tr>
					<tr>
					<th>Description </th>
					<td><div class='panel-heading'>
					<p>$row[Description]</p>
						<input id='qty' type='number' value='1' name='qty'> 
						<button class='btn btn-primary' id='btn_add_cart' onclick='add_cart($row[ID])'>Add</button>
						<button class='btn btn-primary' id='btn_add_cart' onclick='add_wish($row[ID])'>Save to Wishlist</button>
					</tr>
				</div>
			</div>
			
		END;
	}
}
?>
</table>
<script>
	var xmlhttp;

	function add_cart(pid) {
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = showresponse;
		var a = document.getElementById('qty').value;
		xmlhttp.open("GET", "ajax/add_cart.php?pid=" + pid + "&qty=" + a, true);
		xmlhttp.send();
	}

	function showresponse() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("response").innerHTML = xmlhttp.responseText;
		}
	}

	var xmlhttp2;

	function add_wish(pid) {
		xmlhttp2 = new XMLHttpRequest();
		xmlhttp2.onreadystatechange = showresponse2;
		xmlhttp2.open("GET", "ajax/add_cart.php?pid=" + pid, true);
		xmlhttp2.send();
	}

	function showresponse2() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("response").innerHTML = xmlhttp2.responseText;
		}
	}
</script>