<?php
session_start();
if (!isset($_SESSION['wlist']) || !is_array($_SESSION['wlist'])) {
    $_SESSION['wlist'] = array();
}
$pid = $_REQUEST['pid'];
if (!isset($_SESSION['wlist'][$pid])) {
    $_SESSION['wlist'][$pid] = 0;
}

print '<div class="alert alert-success 
alert-dismissible fade show" role="alert" id="popup">
<strong>Success!</strong> The book is added to your wishlist
<button type="button" class="close"
    data-dismiss="alert" aria-label="Close"> 
    <span aria-hidden="true">×</span> 
</button> 

</div>';
