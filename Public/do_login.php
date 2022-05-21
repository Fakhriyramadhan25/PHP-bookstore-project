<?php
session_start();
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	// Request data from database
	$u = $_GET['Username'];
	$p = $_GET['Password'];

	// $sql = "SELECT COUNT(*) AS ok, sum(is_admin) as is_admin, min(ID) as ID FROM customer WHERE uname=? AND passwd_enc=?";
	$sql = "SELECT COUNT(*) AS ok, sum(is_admin) as is_admin, min(ID) as ID FROM customer WHERE uname=?";
	$stmt = $mysqli->prepare($sql);
	if (!$stmt) {
		print "ERROR:: " . $mysqli->error;
	}
	$stmt->bind_param("s", $u);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	$sql1 = "SELECT passwd_enc FROM customer WHERE uname = '$u'";
	$stmt1 = $mysqli->prepare($sql1);
	$stmt1->execute();
	$result1 = $stmt1->get_result();
	$row1 = $result1->fetch_assoc();
	$hash = $row1['passwd_enc'];

	if ($hash == $p) {
		if ($row['ok']) {
			$_SESSION['username'] = $u;
			$_SESSION['is_admin'] = $row['is_admin'];
			$_SESSION['userid'] = $row['ID'];
			header("Location: ../account.php?p=after_login");
		} else {
			print "Wrong password... Please try again " . $u;
			$_SESSION['username'] = '?';
		}
	} else {
		header("Location: ../index.php?p=login&error=UP");
		$showAlert = false;
	}
}
