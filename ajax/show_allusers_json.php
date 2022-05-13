<?php
require "../Public/dbconnect.php";
session_start();
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] == 0) {
	die("You are not admin");
}
$stmt = $mysqli->prepare('SELECT * FROM customer');
$stmt->execute();
$res = $stmt->get_result();
print "<table class='table' id='custtable'><thead><tr><th>ID</th><th>firstname</th><th>Lastname</th></tr></thead><tbody>";
while ($row2 = mysqli_fetch_assoc($res)) {
	print "<tr><td> $row2[ID] </td><td> $row2[Fname] </td><td>$row2[Lname]</td></tr>";
}

print "</tbody></table>";

// $r = $res->fetch_all(MYSQLI_ASSOC);
// print json_encode($r);
