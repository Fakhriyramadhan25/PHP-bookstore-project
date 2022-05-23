<?php
if (!is_array($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
	print "Added to Cart!!!";
}
$pid = $_REQUEST['pid'];
if (!isset($_SESSION['cart'][$pid])) {
	$_SESSION['cart'][$pid] = 0;
	print "Added to Cart!!!";
}
$_SESSION['cart'][$pid] += $_REQUEST['qty'];


require "Public/cart.php";
