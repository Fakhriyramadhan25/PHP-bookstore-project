<?php
require "../Public/dbconnect.php";
session_start();
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == 0) {
	die("You are not admin");
}
$stmt = $mysqli->prepare('SELECT * FROM customer');
$stmt->execute();
$res = $stmt->get_result();
print "<h1>List of Accounts</h1>";
print "<table class='table' id='custtable'><thead class='thead-dark'><tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr></thead><tbody>";
while ($row2 = mysqli_fetch_assoc($res)) {
	print "<tr><td> $row2[ID] </td><td> $row2[Fname] </td><td>$row2[Lname]</td></tr>";
}

print "</tbody></table>";
