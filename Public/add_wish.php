<?php
if (!isset($_SESSION['wlist']) || !is_array($_SESSION['wlist'])) {
    $_SESSION['wlist'] = array();
}
$pid = $_REQUEST['pid'];
if (!isset($_SESSION['wlist'][$pid])) {
    $_SESSION['wlist'][$pid] = 0;
}

$_SESSION['cart'][$pid];

require "Public/wishlist.php";
