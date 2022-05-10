<?php
print "Bye bye $_SESSION[username]. We hope we see you again.";


session_start();

// automatically unset the session
session_unset();
session_destroy();



// Manual unset the session
$_SESSION['username'] = '?';
$_SESSION['is_admin'] = 0;
$_SESSION['userid'] = '';

header("Location: index.php");
