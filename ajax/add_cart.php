<?php
session_start();
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}
$pid = $_REQUEST['pid'];
if (!isset($_SESSION['cart'][$pid])) {
	$_SESSION['cart'][$pid] = 0;
}
$_SESSION['cart'][$pid] += $_REQUEST['qty'];

print '<div class="alert alert-success 
alert-dismissible fade show" role="alert" id="popup">
<strong>Success!</strong> Product added to your cart You have ' . $_SESSION['cart'][$pid] . ' products in your cart
<button type="button" class="close"
    data-dismiss="alert" aria-label="Close"> 
    <span aria-hidden="true">×</span> 
</button> 

</div>';
